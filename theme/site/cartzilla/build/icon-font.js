import config from './config.js'
import { generateFonts, FontAssetType } from 'fantasticon'
import { optimize } from 'svgo'
import cssnano from 'cssnano'
import fs from 'fs-extra'
import postcss from 'postcss'
import configureLogger from './logger.js'

// Setup logger with specific context
const log = configureLogger('Icon Font')

// Options for SVG optimization to be used in the optimizeSvgIcons function
const svgOptimizeOptions = {
  removeViewBox: false,
  removeDimensions: true,
}

// Configuration options for generating font assets
const generateFontsOptions = {
  inputDir: config.icons.src, // Directory containing source SVG icons
  outputDir: config.icons.output, // Directory where output (fonts and CSS) will be saved
  fontTypes: [FontAssetType.WOFF2], // Types of font assets to generate
  assetTypes: ['css'], // Types of additional assets to generate (CSS in this case)
  fontsUrl: './', // Base URL/path for the fonts in the generated CSS
  tag: '', // Tag to be appended to font names
  prefix: config.icons.cssPrefix, // Prefix to use for CSS classes
  name: config.icons.fontName, // Name of the generated font
}

// Asynchronously clears the output directory to prepare for new output
const cleanOutputDirectory = async () => {
  await fs.emptyDir(config.icons.output)
}

// Asynchronously optimizes SVG files in the source directory
const optimizeSvgIcons = async (options) => {
  log.info('Optimizing SVG icons...')
  const files = fs.readdirSync(config.icons.src)

  for (let file of files) {
    if (file.endsWith('.svg')) {
      const data = fs.readFileSync(`${config.icons.src}/${file}`, 'utf8')
      const result = await optimize(data, options)
      fs.writeFileSync(`${config.icons.src}/${file}`, result.data)
    }
  }
  log.success('Optimized SVG icons')
}

// Asynchronously minifies the generated CSS and removes the hash from the font URL
const minifyCss = async () => {
  const cssFileName = `${config.icons.fontName}.css`
  const minifiedCssFileName = `${config.icons.fontName}.min.css`
  const cssFilePath = `${config.icons.output}/${cssFileName}`

  const css = fs.readFileSync(cssFilePath, 'utf8')
  const modifiedCss = css.replace(
    /src: url\(.*?\?[^)]*\)/g,
    `src: url(${config.icons.fontName}.woff2)`
  )

  const result = await postcss([cssnano]).process(modifiedCss, {
    from: undefined,
  })

  fs.writeFileSync(`${config.icons.output}/${minifiedCssFileName}`, result.css)
  try {
    fs.unlinkSync(cssFilePath)
  } catch (err) {
    console.error(`Error while deleting ${cssFileName}.`, err)
  }
}

// Main function to run all asynchronous tasks
;(async () => {
  await cleanOutputDirectory()
  await optimizeSvgIcons(svgOptimizeOptions)
  log.info('Generating font...')
  await generateFonts(generateFontsOptions)
  log.success('Font generated')
  await minifyCss()
})().catch((error) => log.error('', 'An error occurred:', error))
