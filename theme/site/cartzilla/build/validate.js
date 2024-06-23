import { HtmlValidate } from 'html-validate'
import fs from 'fs'
import config from './config.js'
import configureLogger from './logger.js'

// Setup logger with specific context
const log = configureLogger('Validator')

// Define a function to validate a single HTML file
const validateHtmlFile = (file) => {
  return new Promise((resolve) => {
    // Read the HTML file asynchronously
    fs.readFile(file, 'utf8', (readErr, data) => {
      if (readErr) {
        log.error('', `Error reading ${file}: ${readErr.message}`) // Log read errors
        resolve(false)
        return
      }

      // Validate the content of the file
      const report = htmlvalidate.validateStringSync(data)

      if (!report.valid) {
        log.error(file, 'Validation failed') // Log if validation fails
        // Log each error found in the file
        report.results.forEach((result) => {
          result.messages.forEach((message) => {
            log.warn(
              `  ${message.message} (line ${message.line}, col ${message.column})`
            )
          })
        })
        resolve(false)
      } else {
        resolve(true) // Resolve true if the file is valid
      }
    })
  })
}

// Load HTML Validator configuration from a JSON file
const configFile = fs.readFileSync('./.htmlvalidate.json', 'utf8')
const configObj = JSON.parse(configFile)
const htmlvalidate = new HtmlValidate(configObj)

// Main function to process validation across multiple HTML files
const processValidation = async () => {
  log.info('Validating HTML files...')

  const validationPromises = [] // Array to hold promises for each file validation

  // Iterate over directories specified in configuration
  for (const dir of config.path.html) {
    try {
      const stats = await fs.promises.stat(dir)

      if (!stats.isDirectory()) {
        // Skip if the path is not a directory
        continue
      }

      const files = await fs.promises.readdir(dir)

      if (!files.length) {
        // Skip if the directory is empty
        continue
      }

      // Filter for HTML files only
      const htmlFiles = files.filter((file) => file.endsWith('.html'))

      if (!htmlFiles.length) {
        log.info('', `No HTML files found in the ${dir} directory.`)
        continue
      }

      // Create validation promises for each HTML file found
      htmlFiles.forEach((file) => {
        validationPromises.push(validateHtmlFile(`${dir}/${file}`))
      })
    } catch (err) {
      log.error('', `Error processing directory ${dir}: ${err.message}`)
    }
  }

  // Await all promises and log overall success or failure
  const results = await Promise.all(validationPromises)

  if (results.every((result) => result)) {
    log.success('', 'All HTML files validated successfully!')
  }
}

// Execute the validation process
processValidation()
