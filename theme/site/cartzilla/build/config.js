const config = {
  path: {
    html: ['./', './docs'],
    scss: 'src/scss',
    src_js: 'src/js',
    js: 'assets/js',
    css: 'assets/css',
    img: 'assets/img',
    fonts: 'assets/fonts',
    app_icons: 'assets/app-icons',
    vendor: 'assets/vendor',
    dist: 'dist',
  },
  icons: {
    src: 'src/icons',
    output: 'assets/icons',
    fontName: 'cartzilla-icons',
    cssPrefix: 'ci',
  },
  fileNames: {
    css: 'theme',
    js: 'theme',
  },
  jsBanner: `
  /*!
   * Cartzilla | Multipurpose E-Commerce Bootstrap HTML Template
   * Copyright 2024 Createx Studio
   * Theme scripts
   *
   * @copyright Createx Studio
   * @version 3.0.0
   */
  `,
}

export default config
