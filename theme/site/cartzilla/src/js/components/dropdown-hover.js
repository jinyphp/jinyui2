/**
 * Open Dropdown on "hover" (Bootstrap's default is "click")
 * @requires https://getbootstrap.com
 * @requires https://popper.js.org/
 */

export default (() => {
  if ((!'ontouchstart') in window || !navigator.maxTouchPoints) {
    const dropdownTriggerList = document.querySelectorAll(
      '[data-bs-toggle="dropdown"][data-bs-trigger="hover"]'
    )

    /* eslint-disable no-unused-vars, no-undef */
    const dropdownList = [...dropdownTriggerList].map((dropdownTriggerEl) => {
      const bsDropdown = new bootstrap.Dropdown(dropdownTriggerEl)

      dropdownTriggerEl.addEventListener('click', (e) => {
        if (e.currentTarget.getAttribute('href') === '#') {
          e.preventDefault()
        }
      })

      dropdownTriggerEl.addEventListener('mouseover', () => {
        dropdownTriggerEl.dataset.bsToggle = 'dropdown-hover'
        bsDropdown.show()
        dropdownTriggerEl.blur()
      })

      dropdownTriggerEl.parentNode.addEventListener('mouseleave', () => {
        dropdownTriggerEl.dataset.bsToggle = 'dropdown'
        bsDropdown.hide()
      })

      dropdownTriggerEl.addEventListener('focus', () => {
        bsDropdown.show()
      })

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
          bsDropdown.hide()
        }
      })
    })
  }
  /* eslint-enable no-unused-vars, no-undef */
})()
