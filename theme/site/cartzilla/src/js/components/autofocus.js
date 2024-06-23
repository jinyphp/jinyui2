/**
 * Focus input field automatically upon openning modal, collapse, offcanvas, dropdown or window
 */

export default (() => {
  const autofocus = document.querySelectorAll('[data-autofocus]')

  if (autofocus.length === 0) return

  autofocus.forEach((input) => {
    const containerType = input.dataset.autofocus // modal / collapse / offcanvas / dropdown / window

    if (
      containerType === 'modal' ||
      containerType === 'collapse' ||
      containerType === 'offcanvas' ||
      containerType === 'dropdown'
    ) {
      const container = input.closest('.' + containerType)
      container.addEventListener(`shown.bs.${containerType}`, () => {
        input.focus()
      })
    } else {
      input.focus()
    }
  })
})()
