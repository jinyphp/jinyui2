/**
 * Update the text inside the binded element taken from data-label upon clicking
 */

export default (() => {
  const bindedLabels = document.querySelectorAll('[data-binded-label]')

  if (bindedLabels.length === 0) return

  bindedLabels.forEach((container) => {
    try {
      const targetElement = document.querySelector(
        container.dataset.bindedLabel
      )
      if (!targetElement) {
        throw new Error(
          `Target element not found for data-binded-label: ${container.dataset.bindedLabel}`
        )
      }

      container.addEventListener('click', (event) => {
        const clickedElement = event.target.closest('[data-label]')
        if (!clickedElement) return

        const dataLabel = clickedElement.dataset.label

        targetElement.textContent = dataLabel
      })
    } catch (error) {
      console.error(error)
    }
  })
})()
