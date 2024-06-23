/**
 * Count input with increment (+) and decrement (-) buttons
 */

export default (() => {
  const countInputs = document.querySelectorAll('.count-input')

  if (countInputs.length === 0) return

  const handleIncrement = (event) => {
    const input = event.currentTarget.parentNode.querySelector('.form-control')
    const maxValue = parseInt(input.getAttribute('max')) || Infinity

    if (input.value < maxValue) {
      input.value++
      updateButtonStates(input)
    }
  }

  const handleDecrement = (event) => {
    const input = event.currentTarget.parentNode.querySelector('.form-control')
    const minValue = parseInt(input.getAttribute('min')) || 0

    if (input.value > minValue) {
      input.value--
      updateButtonStates(input)
    }
  }

  const updateButtonStates = (input) => {
    const decrementBtn = input.parentNode.querySelector('[data-decrement]')
    const incrementBtn = input.parentNode.querySelector('[data-increment]')
    const minValue = parseInt(input.getAttribute('min')) || 0
    const maxValue = parseInt(input.getAttribute('max')) || Infinity

    decrementBtn.disabled = input.value <= minValue
    incrementBtn.disabled = input.value >= maxValue

    const parent = input.closest('.count-input')
    if (!parent.classList.contains('count-input-collapsible')) return

    const inputValue = incrementBtn.querySelector('[data-count-input-value]')

    if (input.value > 0) {
      parent.classList.remove('collapsed')
      if (inputValue) {
        inputValue.textContent = input.value
      }
    } else {
      parent.classList.add('collapsed')
      if (inputValue) {
        inputValue.textContent = ''
      }
    }
  }

  countInputs.forEach((component) => {
    const incrementBtn = component.querySelector('[data-increment]')
    const decrementBtn = component.querySelector('[data-decrement]')
    const input = component.querySelector('.form-control')

    incrementBtn.addEventListener('click', handleIncrement)
    decrementBtn.addEventListener('click', handleDecrement)

    updateButtonStates(input)
  })
})()
