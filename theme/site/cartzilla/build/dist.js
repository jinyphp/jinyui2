import config from './config.js'
import fs from 'fs-extra'
import { JSDOM } from 'jsdom'
import path from 'path'
import configureLogger from './logger.js'

// Setup logger with specific context
const log = configureLogger('Dist')

// Helper function to copy files with specific extensions
const copyMinifiedFiles = async (source, destination, extension) => {
  try {
    const files = await fs.readdir(source)
    await Promise.all(
      files
        .filter(
          (file) =>
            file.endsWith(extension) || file.endsWith(`${extension}.map`)
        )
        .map((file) => fs.copy(`${source}/${file}`, `${destination}/${file}`))
    )
  } catch (error) {
    log.error('Error copying files:', error)
    throw error
  }
}

// Helper function that checks if a file or directory exists at the specified path
const checkIfExists = async (filePath) => {
  return await fs.pathExists(filePath)
}

// Function to parse HTML and find vendor files, then copy them to the distribution path
const parseHTMLAndCopyVendorFiles = async (htmlPaths, vendorPath, distPath) => {
  const copiedPlugins = new Set() // To avoid duplications
  log.info('Copying vendor files...')
  try {
    for (const htmlDir of htmlPaths) {
      const htmlFiles = await fs.readdir(htmlDir)
      for (const file of htmlFiles) {
        if (file.endsWith('.html')) {
          const filePath = path.join(htmlDir, file)
          const content = await fs.readFile(filePath, 'utf-8')
          const dom = new JSDOM(content)
          const document = dom.window.document

          // Find all script and link tags that contain references to vendor assets
          const elements = [
            ...document.querySelectorAll(
              `script[src*="${config.path.vendor}"], link[href*="${config.path.vendor}"]`
            ),
          ]
          for (const element of elements) {
            let src = element.src || element.href
            const fullPath = path.resolve(path.dirname(filePath), src)
            const relativePathFromVendor = fullPath.split(vendorPath)[1]

            if (relativePathFromVendor) {
              const parts = relativePathFromVendor
                .split(path.sep)
                .filter((part) => part !== '..' && part.trim())
              const pluginName = parts[0] // The plugin name is the first part of the path
              const fileName = parts.pop() // The file name is the last part
              const pluginPath = path.join(distPath, pluginName) // Construct the plugin-specific path
              const newPath = path.join(pluginPath, fileName)

              // Avoid copying the same file more than once
              if (!copiedPlugins.has(newPath)) {
                copiedPlugins.add(newPath)
                await fs.ensureDir(pluginPath) // Make sure the plugin directory exists
                await fs.copy(fullPath, newPath) // Copy the file to the new path
              }
            }
          }
        }
      }
    }
    log.success('Vendor files copied successfully!')
  } catch (error) {
    log.error('Error during vendor files copy process:', error)
    throw error
  }
}

// Function to copy HTML files to the distribution path
const copyHtmlFiles = async (
  dirPath = config.path.html,
  distBasePath = config.path.dist,
  isRoot = true
) => {
  if (isRoot) {
    log.info('Copying HTML files...')
  }
  try {
    for (const htmlDir of dirPath) {
      const fullHtmlDir = path.resolve(htmlDir)
      const files = await fs.readdir(fullHtmlDir, { withFileTypes: true })
      for (const file of files) {
        if (file.isDirectory()) {
          // Only allow recursion for subdirectories when not in the root directory
          const allowSubdirs = htmlDir !== './' && htmlDir !== '.' // Adjusted to ensure subdirectories in the root are ignored
          if (allowSubdirs) {
            await copyHtmlFiles(
              [path.join(htmlDir, file.name)],
              distBasePath,
              false
            )
          }
        } else if (file.name.endsWith('.html')) {
          const srcPath = path.join(fullHtmlDir, file.name)
          const distDir = path.relative(
            config.basePath || process.cwd(),
            htmlDir
          ) // Assuming config.basePath is defined, otherwise use CWD
          const distPath = path.join(distBasePath, distDir, file.name)
          await fs.ensureDir(path.dirname(distPath))
          await fs.copy(srcPath, distPath)
        }
      }
    }
    if (isRoot) {
      log.success('HTML files copied successfully!')
    }
  } catch (error) {
    log.error('Error during HTML files copy process:', error)
    throw error
  }
}

// Helper function to update vendor paths in HTML files
const updateVendorPathsInHtml = async (
  distBasePath = `${config.path.dist}`
) => {
  log.info('Updating vendor paths in HTML files...')
  try {
    const filesToProcess = [] // This will hold paths to all HTML files to process

    // Helper function to recursively find all HTML files
    const findAllHtmlFiles = async (basePath) => {
      const files = await fs.readdir(basePath, { withFileTypes: true })
      for (const file of files) {
        const filePath = path.join(basePath, file.name)
        if (file.isDirectory()) {
          await findAllHtmlFiles(filePath)
        } else if (file.name.endsWith('.html')) {
          filesToProcess.push(filePath)
        }
      }
    }

    await findAllHtmlFiles(distBasePath)

    for (const filePath of filesToProcess) {
      let content = await fs.readFile(filePath, 'utf-8')
      const dom = new JSDOM(content)
      const document = dom.window.document

      const elements = [
        ...document.querySelectorAll(
          `link[href*="${config.path.vendor}"], script[src*="${config.path.vendor}"]`
        ),
      ]

      elements.forEach((element) => {
        const attr = element.tagName === 'LINK' ? 'href' : 'src'
        let value = element.getAttribute(attr)
        const vendorPathIndex =
          value.indexOf(`${config.path.vendor}/`) +
          `${config.path.vendor}/`.length

        // Split the value at the point where 'assets/vendor/' is found
        const [relativePath, vendorFilePath] = [
          value.slice(0, vendorPathIndex),
          value.slice(vendorPathIndex),
        ]

        // Extract the vendor plugin name and filename from the path
        const pathParts = vendorFilePath.split('/')
        const pluginName = pathParts[0]
        const fileName = pathParts.pop()

        // Construct the new path using only the modified part after "assets/vendor/"
        const newPath = `${relativePath}${pluginName}/${fileName}`
        element.setAttribute(attr, newPath)
      })

      // Serialize the document back to a string and write it to the file
      content = dom.serialize()
      await fs.writeFile(filePath, content, 'utf-8')
    }
    log.success('Vendor paths in HTML files updated successfully!')
  } catch (error) {
    log.error('Error updating vendor paths in HTML files:', error)
    throw error
  }
}

// Main function to manage the distribution process
const distribute = async () => {
  try {
    log.info('Starting distribution process...')
    // Create dist directory if it doesn't exist
    await fs.ensureDir(`${config.path.dist}/${config.path.js}`)
    await fs.ensureDir(`${config.path.dist}/${config.path.css}`)
    await fs.ensureDir(`${config.path.dist}/${config.icons.output}`)
    await fs.ensureDir(`${config.path.dist}/${config.path.img}`)
    await fs.ensureDir(`${config.path.dist}/${config.path.fonts}`)
    await fs.ensureDir(`${config.path.dist}/${config.path.app_icons}`)
    await fs.ensureDir(`${config.path.dist}/${config.path.vendor}`)

    // Execute the copying of minified JavaScript, CSS files, and other assets
    await copyMinifiedFiles(
      `${config.path.js}`,
      `${config.path.dist}/${config.path.js}`,
      '.min.js'
    )
    await copyMinifiedFiles(
      `${config.path.css}`,
      `${config.path.dist}/${config.path.css}`,
      '.min.css'
    )
    await fs.copy(
      config.icons.output,
      `${config.path.dist}/${config.icons.output}`
    )
    await fs.copy(
      `${config.path.img}`,
      `${config.path.dist}/${config.path.img}`
    )
    await fs.copy(
      `${config.path.fonts}`,
      `${config.path.dist}/${config.path.fonts}`
    )
    await fs.copy(
      `${config.path.app_icons}`,
      `${config.path.dist}/${config.path.app_icons}`
    )
    await fs.copy('manifest.json', `${config.path.dist}/manifest.json`)
    if (await checkIfExists(`${config.path.js}/theme-switcher.js`)) {
      await fs.copy(
        `${config.path.js}/theme-switcher.js`,
        `${config.path.dist}/${config.path.js}/theme-switcher.js`
      )
    }
    if (await checkIfExists('service-worker.js')) {
      await fs.copy(
        'service-worker.js',
        `${config.path.dist}/service-worker.js`
      )
    }

    // Copy vendor files to the distribution path
    await parseHTMLAndCopyVendorFiles(
      config.path.html,
      config.path.vendor,
      `${config.path.dist}/${config.path.vendor}`
    )

    // Copy HTML files to the distribution path
    await copyHtmlFiles()

    // Update vendor paths inside copied HTML files
    await updateVendorPathsInHtml()

    log.success('Distribution process completed successfully!')
  } catch (error) {
    log.error('Failed to complete distribution process:', error)
  }
}

// Start the distribution process
distribute()
