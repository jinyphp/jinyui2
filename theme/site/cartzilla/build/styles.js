import fs from 'fs'
import config from './config.js'
import { execSync } from 'child_process'
import stylelint from 'stylelint'
import autoprefixer from 'autoprefixer'
import postcss from 'postcss'
import rtlcss from 'rtlcss'
import cssnano from 'cssnano'
import configureLogger from './logger.js'

// Setup logger with specific context
const log = configureLogger('Styles')

// Determine the desired operation based on command line argument
const operation = process.argv[2]

// Function to run a shell script and log the outcome
function runScript(alias, script) {
  try {
    execSync(script)
    log.success(alias) // Log success if script runs without errors
  } catch (error) {
    log.error(
      '',
      `Task ${alias} hasn't been completed! ${error.stdout.toString()}`
    ) // Log failure and show error output
  }
}

// Function to lint SCSS files using stylelint
const lintScss = async () => {
  log.info('Linting SCSS...')
  try {
    const result = await stylelint.lint({
      files: `${config.path.scss}/**/*.scss`,
      configFile: '.stylelintrc.json',
      formatter: 'string',
    })

    if (result.errored) {
      log.error('', result.report) // Log errors if linting failed
      throw new Error('Linting errors found')
    } else {
      log.success('Lint SCSS') // Log success if no errors found
    }
  } catch (error) {
    throw error // Rethrow error to be handled by the caller
  }
}

// Function to compile SCSS to CSS using Sass and enhance CSS with PostCSS plugins
const compileSass = async () => {
  const sassCommand = `sass --style expanded --source-map --embed-sources --no-error-css --load-path=node_modules ${config.path.scss}/${config.fileNames.css}.scss:${config.path.css}/${config.fileNames.css}.css`
  log.info('Compiling CSS...')
  runScript('Compile SCSS to CSS', sassCommand)

  const cssPath = `${config.path.css}/${config.fileNames.css}.css`
  if (fs.existsSync(cssPath)) {
    const cssContent = fs.readFileSync(cssPath, 'utf-8')
    const result = await postcss([autoprefixer]).process(cssContent, {
      from: cssPath,
      to: cssPath,
    })
    fs.writeFileSync(cssPath, result.css)
    if (result.map) {
      fs.writeFileSync(`${cssPath}.map`, result.map.toString()) // Write source map if available
    }
    log.success('Added vendor prefixes and generated source map')
  }
}

// Function to convert CSS file to its RTL version and handle related source map
const convertToRTL = async (inputPath) => {
  try {
    const cssContent = fs.readFileSync(inputPath, 'utf-8')
    const inputMapPath = `${inputPath}.map`
    let options = {
      from: inputPath,
      to: `${inputPath.replace('.css', '.rtl.css')}`,
      map: { inline: false },
    }

    if (fs.existsSync(inputMapPath)) {
      const previousMap = fs.readFileSync(inputMapPath, 'utf-8')
      options.map.prev = previousMap // Use previous map to generate a new one
    }

    const result = await postcss([rtlcss]).process(cssContent, options)
    fs.writeFileSync(options.to, result.css)
    if (result.map) {
      fs.writeFileSync(`${options.to}.map`, result.map.toString())
    }
    log.success('Converted to RTL and saved with source map')
  } catch (error) {
    log.error('', `Failed to convert ${inputPath} to RTL: ${error.message}`)
  }
}

// Helper function to minify a single CSS file
const minifySingleCssFile = async (inputPath, outputPath) => {
  const cssContent = await fs.promises.readFile(inputPath, 'utf8')
  const result = await postcss([
    cssnano({
      preset: [
        'default',
        {
          discardComments: { removeAll: true },
        },
      ],
    }),
  ]).process(cssContent, {
    from: inputPath,
    to: outputPath,
    map: { inline: false }, // Generate external source map files
  })

  await fs.promises.writeFile(outputPath, result.css)
  if (result.map) {
    await fs.promises.writeFile(`${outputPath}.map`, result.map.toString())
  }

  log.success(`Minified CSS and generated source map`)
}

// Function to minify all non-RTL CSS files
const minifyCss = async () => {
  const files = await fs.promises.readdir(config.path.css)
  const cssFiles = files.filter(
    (file) =>
      file.endsWith('.css') &&
      !file.endsWith('.rtl.css') &&
      !file.endsWith('.min.css')
  )

  if (cssFiles.length === 0) {
    log.error('No CSS files found to minify.')
    return
  }

  for (const file of cssFiles) {
    const cssPath = `${config.path.css}/${file}`
    const minCssPath = `${config.path.css}/${file.replace('.css', '.min.css')}`
    await minifySingleCssFile(cssPath, minCssPath)
  }
}

// Function to minify all RTL CSS files
const minifyRtlCss = async () => {
  const files = await fs.promises.readdir(config.path.css)
  const rtlCssFiles = files.filter((file) => file.endsWith('.rtl.css'))

  if (rtlCssFiles.length === 0) {
    log.error('No RTL CSS files found to minify.')
    return
  }

  for (const file of rtlCssFiles) {
    const cssPath = `${config.path.css}/${file}`
    const minCssPath = `${config.path.css}/${file.replace('.rtl.css', '.rtl.min.css')}`
    await minifySingleCssFile(cssPath, minCssPath)
  }
}

// Main function to orchestrate the build process based on command line argument
const main = async () => {
  switch (operation) {
    case 'compile':
      await lintScss()
      await compileSass()
      break
    case 'rtl':
      await convertToRTL(`${config.path.css}/${config.fileNames.css}.css`)
      break
    case 'minify':
      await minifyCss()
      break
    case 'minify-rtl':
      await minifyRtlCss()
      break
    default:
      log.error(
        'Invalid command. Use either "compile", "rtl", "minify", or "minify-rtl"'
      )
  }
}

main().catch((error) => log.error('', error.message))
