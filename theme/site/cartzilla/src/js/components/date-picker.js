/**
 * Date / time picker
 * @requires https://github.com/flatpickr/flatpickr
 */

export default (() => {
  const pickers = document.querySelectorAll('[data-datepicker]')

  if (pickers.length === 0) return

  const defaultOptions = {
    disableMobile: 'true',
  }

  pickers.forEach((picker) => {
    let dataAttr = picker.getAttribute('data-datepicker'),
      userOptions,
      options

    if (dataAttr !== '') userOptions = JSON.parse(dataAttr)

    /* eslint-disable indent, no-undef */
    const linkedInput =
      userOptions?.linkedInput !== undefined
        ? {
            plugins: [new rangePlugin({ input: userOptions.linkedInput })],
          }
        : {}
    /* eslint-enable indent, no-undef */

    options = { ...defaultOptions, ...userOptions, ...linkedInput }

    flatpickr(picker, options) // eslint-disable-line no-undef
  })
})()
