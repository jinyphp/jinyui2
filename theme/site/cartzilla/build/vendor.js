import config from './config.js'
import fs from 'fs-extra'
import path from 'path'
import { fileURLToPath } from 'url'
import configureLogger from './logger.js'

// Determine the directory name of the current module
const __dirname = path.dirname(fileURLToPath(import.meta.url))

// Construct the path to the package.json file
const packageFilePath = path.join(__dirname, '..', 'package.json')

// Read and parse the package.json file asynchronously
const packageFileContents = await fs.readFile(packageFilePath, 'utf8')
const packageFile = JSON.parse(packageFileContents)

// Configure logger
const log = configureLogger('Vendor')

// List of dependencies to exclude from copying
const excludedDependencies = ['bootstrap']

// Function to clean the vendor directory before copying new files
const cleanVendorDirectory = async () => {
  log.info('Cleaning vendor directory...')
  try {
    await fs.emptyDir(config.path.vendor) // Empty the specified vendor directory
    log.success('Cleaned vendor directory')
  } catch (error) {
    log.error('', `Failed to clean vendor directory: ${error.message}`)
  }
}

// Function to copy dependencies to the vendor directory
const copyDependencies = async () => {
  log.info('Copying dependencies...')
  // Filter out excluded dependencies from package.json
  const dependencies = Object.keys(packageFile.dependencies).filter(
    (dependency) => !excludedDependencies.includes(dependency)
  )

  let errors = 0 // Counter for tracking copy errors
  for (const dependency of dependencies) {
    try {
      // Copy each dependency to the vendor directory
      await fs.copy(
        `node_modules/${dependency}`,
        `${config.path.vendor}/${dependency}`
      )
    } catch (error) {
      errors++ // Increment error counter on failure
      log.error('', `Failed to copy ${dependency}: ${error.message}`)
    }
  }

  // Log the outcome of the copy operation
  if (errors === 0) {
    log.success('All dependencies copied successfully')
  } else {
    log.error('', `${errors} dependencies failed to copy`)
  }
}

// Self-invoking async function to perform cleaning and copying tasks
;(async () => {
  await cleanVendorDirectory()
  await copyDependencies()
})()
