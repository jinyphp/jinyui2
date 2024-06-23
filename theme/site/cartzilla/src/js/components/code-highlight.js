/**
 * Code highlighting
 * @requires https://highlightjs.org/
 */

export default (() => {
  /* eslint-disable no-undef */
  document.querySelectorAll('.code-highlight code').forEach((el) => {
    // Extracting language from the class name
    const languageClass = Array.from(el.classList).find((cls) =>
      cls.startsWith('language-')
    )
    const language = languageClass ? languageClass.split('-')[1] : null

    // Proceed only if a language is found
    if (language) {
      hljs.configure({
        ignoreUnescapedHTML: true,
        languages: [language], // Adding the detected language to the array
      })
      hljs.highlightElement(el)
    }
  })
  /* eslint-enable no-undef */

  // Copy to clipboard button
  const buttons = document.querySelectorAll('[data-copy-code]')
  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      const codeBlockId = button.getAttribute('data-copy-code').substring(1)
      const codeBlock = document.getElementById(codeBlockId)
      if (codeBlock) {
        const codeText = codeBlock.textContent || codeBlock.innerText
        navigator.clipboard
          .writeText(codeText)
          .then(() => {
            button.classList.remove('btn-outline-secondary')
            button.classList.add('btn-outline-success', 'text-success')
            button.innerHTML = '<i class="ci-check fs-sm me-1"></i> Copied'

            setTimeout(() => {
              button.classList.remove('btn-outline-success', 'text-success')
              button.classList.add('btn-outline-secondary')
              button.innerHTML = '<i class="ci-copy fs-sm me-1"></i> Copy'
            }, 2000)
          })
          .catch((err) => {
            console.error('Failed to copy code: ', err)
          })
      } else {
        console.error('Code block not found: ' + codeBlockId)
      }
    })
  })
})()
