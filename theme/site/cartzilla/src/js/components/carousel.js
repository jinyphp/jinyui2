/**
 * Content carousel (slider) with extensive options to control behaviour and appearance
 * @requires https://swiperjs.com/
 */

export default (() => {
  // Get all elements with the 'swiper' class
  const carousels = document.querySelectorAll('[data-swiper]')

  if (carousels.length === 0) return

  // Iterate over each element using the built-in forEach method
  /* eslint-disable no-unused-vars */
  carousels.forEach((value, index) => {
    let options, images

    // Parse swiper options from the data attribute
    if (value.dataset.swiper !== undefined && value.dataset.swiper !== '') {
      options = JSON.parse(value.dataset.swiper)
      images = options?.thumbnails?.images
    }

    // Create a new Swiper instance
    /* eslint-disable no-undef */
    const swiper = new Swiper(value, options)
    /* eslint-enable no-undef */

    // Check if a controlled slider is specified
    if (options?.controlSlider) {
      let controlledSliders = []

      if (Array.isArray(options.controlSlider)) {
        // Handle multiple sliders
        controlledSliders = options.controlSlider.map((selector) =>
          document.querySelector(selector)
        )
      } else {
        // Handle single slider
        controlledSliders.push(document.querySelector(options.controlSlider))
      }

      const swiperControlledInstances = controlledSliders.map(
        (controlledSlider) => {
          const controlledSliderOptions =
            controlledSlider?.dataset.swiper &&
            JSON.parse(controlledSlider.dataset.swiper)

          // Create a new Swiper instance for each controlled slider
          /* eslint-disable no-undef */
          return new Swiper(controlledSlider, controlledSliderOptions)
          /* eslint-enable no-undef */
        }
      )

      swiper.controller.control = swiperControlledInstances
    }
  })
})()
