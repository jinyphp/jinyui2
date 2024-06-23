/**
 * Image zoom on hover
 * @requires https://github.com/imgix/drift
 */

export default (() => {
  const images = document.querySelectorAll('[data-zoom]')

  if (images.length === 0) return

  images.forEach((image) => {
    let options
    if (
      image.dataset.zoomOptions !== undefined &&
      image.dataset.zoomOptions !== ''
    ) {
      options = JSON.parse(image.dataset.zoomOptions)
      const zoomPane = document.querySelector(options.paneSelector)
      /* eslint-disable no-undef */
      const drift = new Drift(image, {
        ...{ paneContainer: zoomPane },
        ...options,
      })
      if (options.touchDisable) {
        if ('ontouchstart' in window || navigator.maxTouchPoints) {
          drift.destroy()
        }
      }
      /* eslint-enable no-undef */
    }
  })
})()
