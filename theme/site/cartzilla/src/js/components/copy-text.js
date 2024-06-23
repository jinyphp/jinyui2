/**
 * Copy text string to clipboard from the target element
 */

export default (() => {
  // Function to copy text to clipboard
  const copyToClipboard = (text) => {
    return navigator.clipboard.writeText(text)
  }

  // Function to handle button click
  const handleButtonClick = (event) => {
    const button = event.target
    const originalInnerHTML = button.innerHTML
    const doneLabel = button.dataset.doneLabel || 'Copied'
    const selector = button.getAttribute('data-copy-text-from')
    const targetElement = document.querySelector(selector)
    const textToCopy = targetElement.value || targetElement.textContent

    // Copy the text to the clipboard and update button state
    copyToClipboard(textToCopy)
      .then(() => {
        button.innerHTML = `<i class="ci-check me-1"></i> ${doneLabel}`
        setTimeout(() => {
          button.innerHTML = originalInnerHTML
        }, 2000)
      })
      .catch((err) => {
        console.error('Error in copying text: ', err)
      })
  }

  // Add event listeners to all buttons with the data-copy-text-from attribute
  const buttons = document.querySelectorAll('button[data-copy-text-from]')
  buttons.forEach((button) =>
    button.addEventListener('click', handleButtonClick)
  )
})()
