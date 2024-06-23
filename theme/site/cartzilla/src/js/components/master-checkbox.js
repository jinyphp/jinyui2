/**
 * The master checkboxes are identified by the 'data-master-checkbox' attribute,
    which holds an object with the container selector, label text, checked label text,
    and an optional selector to show/hide an element based on checkbox state.
    When a master checkbox is checked/unchecked, it controls the state of checkboxes
    within the specified container, updates the label text, and shows/hides the optional element.
 */

export default (() => {
  const masterCheckboxes = document.querySelectorAll('[data-master-checkbox]')

  if (masterCheckboxes.length === 0) return

  masterCheckboxes.forEach((masterCheckbox) => {
    const { container, label, labelChecked, showOnCheck } = JSON.parse(
      masterCheckbox.getAttribute('data-master-checkbox')
    )
    const checkboxContainer = document.querySelector(container)
    const masterCheckboxInput = masterCheckbox.querySelector(
      'input[type="checkbox"]'
    )
    const masterCheckboxLabel =
      masterCheckbox.querySelector('.form-check-label')
    const showOnCheckElement = showOnCheck
      ? document.querySelector(showOnCheck)
      : null

    if (!checkboxContainer) {
      console.error(
        `Checkbox container with selector '${container}' not found.`
      )
      return
    }

    masterCheckboxInput.addEventListener('change', () => {
      const allChecked = masterCheckboxInput.checked
      checkboxContainer
        .querySelectorAll('input[type="checkbox"]')
        .forEach((checkbox) => {
          checkbox.checked = allChecked
        })
      masterCheckboxLabel.textContent = allChecked ? labelChecked : label
      if (showOnCheckElement) {
        showOnCheckElement.classList.toggle('d-none', !allChecked)
      }
    })

    const checkboxes = checkboxContainer.querySelectorAll(
      'input[type="checkbox"]'
    )
    checkboxes.forEach((checkbox) => {
      checkbox.addEventListener('change', () => {
        const anyChecked = Array.from(checkboxes).some(
          (checkbox) => checkbox.checked
        )
        masterCheckboxInput.checked = anyChecked
        masterCheckboxLabel.textContent = anyChecked ? labelChecked : label
        if (showOnCheckElement) {
          showOnCheckElement.classList.toggle('d-none', !anyChecked)
        }
      })
    })
  })
})()
