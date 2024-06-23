/**
 * Toggling password visibility inside password input
 */

export default (() => {
  const initializePasswordToggle = (parentContainer) => {
    const icon = document.createElement('span')
    icon.className = 'password-toggle-button-icon d-flex'
    icon.innerHTML = `
      <svg width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor">
        <path d="M23.8 11.6c-.1-.1-.1-.3-.2-.4-.8-1.4-1.7-2.7-2.8-3.8-1.9-2.1-4.9-4.3-8.8-4.3S5.2 5.3 3.2 7.4c-1.1 1.2-2 2.4-2.8 3.8-.1.1-.1.2-.2.4s-.1.5 0 .8v.1c.2.4.5.8.7 1.2.7 1 1.4 2 2.2 2.9 1.9 2.1 4.9 4.3 8.8 4.3 3.9 0 6.8-2.2 8.8-4.3 1.1-1.2 2-2.4 2.8-3.8.1-.1.1-.2.2-.4.2-.3.2-.6.1-.8zm-4.3 3.8c-1.8 1.9-4.3 3.7-7.5 3.7s-5.7-1.8-7.5-3.7c-1-1-1.8-2.2-2.5-3.4.7-1.2 1.5-2.4 2.5-3.4C6.3 6.7 8.8 4.9 12 4.9s5.7 1.8 7.5 3.7c1 1 1.8 2.2 2.5 3.4-.7 1.2-1.5 2.4-2.5 3.4z"/><path d="M12 8.1c-2.2 0-3.9 1.8-3.9 3.9s1.7 3.9 3.9 3.9 3.9-1.7 3.9-3.9-1.7-3.9-3.9-3.9zm0 6c-1.1 0-2.1-1-2.1-2.1s.9-2.1 2.1-2.1 2.1 1 2.1 2.1-1 2.1-2.1 2.1z"/>
      </svg>
    `

    const buttons = parentContainer.querySelectorAll('.password-toggle-button')

    const togglePassword = (e) => {
      const target = e.target
      if (target.type !== 'checkbox') return

      const passwordInput = target
        .closest('.password-toggle')
        .querySelector('.form-control')

      if (target.checked) {
        passwordInput.type = 'text'
        target.parentElement.querySelector(
          '.password-toggle-button-icon'
        ).innerHTML = `
          <svg width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor">
            <path d="M23.8 11.6c-.1-.1-.1-.3-.2-.4-.8-1.4-1.7-2.7-2.8-3.8-1.9-2.1-4.9-4.3-8.8-4.3-.8 0-1.5.1-2.3.3-.5.1-.8.6-.7 1.1s.6.8 1.1.6c.6-.1 1.3-.2 1.9-.2 3.2 0 5.7 1.8 7.5 3.7 1 1 1.8 2.2 2.5 3.4-.5.9-1.1 1.8-1.8 2.6-.3.4-.3.9.1 1.2.4.3.9.3 1.2-.1.9-1 1.6-2.2 2.3-3.3.1-.2.1-.5 0-.8zm-.2 10.8L10.5 9.3 6.8 5.5l-.2-.1-5-5C1.3 0 .7 0 .4.4c-.4.3-.4.9 0 1.2L4.8 6C3 7.6 1.4 9.5.3 11.6c-.1.2-.1.5 0 .8.1.1.1.2.2.4.8 1.4 1.7 2.7 2.8 3.8 1.9 2.1 4.9 4.3 8.8 4.3 2.1 0 4.1-.7 5.8-1.8l4.5 4.5c.3.3.9.3 1.2 0 .4-.3.4-.9 0-1.2zM10 11.2l2.8 2.8c-.8.3-1.7.1-2.3-.5-.7-.6-.8-1.5-.5-2.3zm2 7.9c-3.1 0-5.7-1.8-7.5-3.7-1-1-1.8-2.2-2.5-3.4 1-1.8 2.4-3.4 4-4.8l2.7 2.7-.3.6c-.7 1.5-.3 3.3.9 4.4 1.3 1.2 3.3 1.4 4.8.4l2.5 2.5c-1.4.8-3 1.3-4.6 1.3z"/>
          </svg>
        `
      } else {
        passwordInput.type = 'password'
        target.parentElement.querySelector(
          '.password-toggle-button-icon'
        ).innerHTML = `
          <svg width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor">
            <path d="M23.8 11.6c-.1-.1-.1-.3-.2-.4-.8-1.4-1.7-2.7-2.8-3.8-1.9-2.1-4.9-4.3-8.8-4.3S5.2 5.3 3.2 7.4c-1.1 1.2-2 2.4-2.8 3.8-.1.1-.1.2-.2.4s-.1.5 0 .8v.1c.2.4.5.8.7 1.2.7 1 1.4 2 2.2 2.9 1.9 2.1 4.9 4.3 8.8 4.3 3.9 0 6.8-2.2 8.8-4.3 1.1-1.2 2-2.4 2.8-3.8.1-.1.1-.2.2-.4.2-.3.2-.6.1-.8zm-4.3 3.8c-1.8 1.9-4.3 3.7-7.5 3.7s-5.7-1.8-7.5-3.7c-1-1-1.8-2.2-2.5-3.4.7-1.2 1.5-2.4 2.5-3.4C6.3 6.7 8.8 4.9 12 4.9s5.7 1.8 7.5 3.7c1 1 1.8 2.2 2.5 3.4-.7 1.2-1.5 2.4-2.5 3.4z"/><path d="M12 8.1c-2.2 0-3.9 1.8-3.9 3.9s1.7 3.9 3.9 3.9 3.9-1.7 3.9-3.9-1.7-3.9-3.9-3.9zm0 6c-1.1 0-2.1-1-2.1-2.1s.9-2.1 2.1-2.1 2.1 1 2.1 2.1-1 2.1-2.1 2.1z"/>
          </svg>
        `
      }
    }

    parentContainer.addEventListener('click', togglePassword, false)

    buttons.forEach((button) => {
      button.appendChild(icon.cloneNode(true))
    })
  }

  const containers = document.querySelectorAll('.password-toggle')
  containers.forEach(initializePasswordToggle)
})()
