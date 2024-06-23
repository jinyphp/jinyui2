/**
 * Range slider
 * @requires https://refreshless.com/nouislider/
 */

export default (() => {
  const rangeSliderWidgets = document.querySelectorAll('[data-range-slider]')

  if (rangeSliderWidgets.length === 0) return

  // Check the dir attribute on html tag and set the default to "ltr" if it's not set or invalid
  const htmlElement = document.documentElement
  const direction =
    htmlElement.getAttribute('dir') === 'ltr' ||
    htmlElement.getAttribute('dir') === 'rtl'
      ? htmlElement.getAttribute('dir')
      : 'ltr'

  rangeSliderWidgets.forEach((rangeSliderWidget) => {
    const rangeSlider = rangeSliderWidget.querySelector('.range-slider-ui')
    const valueMinInput = rangeSliderWidget.querySelector(
      '[data-range-slider-min]'
    )
    const valueMaxInput = rangeSliderWidget.querySelector(
      '[data-range-slider-max]'
    )

    let dataOptions
    if (rangeSliderWidget.dataset.rangeSlider !== undefined)
      dataOptions = JSON.parse(rangeSliderWidget.dataset.rangeSlider)

    const options = {
      startMin: parseInt(dataOptions.startMin, 10),
      startMax: parseInt(dataOptions.startMax, 10),
      min: parseInt(dataOptions.min, 10),
      max: parseInt(dataOptions.max, 10),
      step: parseInt(dataOptions.step, 10),
      pips: dataOptions.pips,
      tooltipPrefix: dataOptions.tooltipPrefix || '',
      tooltipSuffix: dataOptions.tooltipSuffix || '',
    }

    const start = options.startMax
      ? [options.startMin, options.startMax]
      : [options.startMin]
    const connect = options.startMax ? true : 'lower'

    /* eslint-disable no-undef */
    noUiSlider.create(rangeSlider, {
      direction: direction,
      start: start,
      connect: connect,
      step: options.step,
      pips: options.pips ? { mode: 'count', values: 5 } : false,
      tooltips: true,
      range: {
        min: options.min,
        max: options.max,
      },
      format: {
        to: function (value) {
          return (
            options.tooltipPrefix + parseInt(value, 10) + options.tooltipSuffix
          )
        },
        from: function (value) {
          return Number(value)
        },
      },
    })

    rangeSlider.noUiSlider.on('update', (values, handle) => {
      let value = values[handle]
      value = value.replace(/\D/g, '')
      if (handle) {
        if (valueMaxInput) {
          valueMaxInput.value = Math.round(value)
        }
      } else {
        if (valueMinInput) {
          valueMinInput.value = Math.round(value)
        }
      }
    })

    if (valueMinInput) {
      valueMinInput.addEventListener('change', function () {
        rangeSlider.noUiSlider.set([this.value, null])
      })
    }

    if (valueMaxInput) {
      valueMaxInput.addEventListener('change', function () {
        rangeSlider.noUiSlider.set([null, this.value])
      })
    }
  })
  /* eslint-enable no-undef */
})()
