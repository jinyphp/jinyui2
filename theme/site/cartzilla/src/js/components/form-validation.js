/**
 * Starter JavaScript for disabling form submissions if there are invalid fields
 */

export default (() => {
  const forms = document.querySelectorAll('.needs-validation')

  if (forms.length === 0) return

  forms.forEach((form) => {
    form.addEventListener(
      'submit',
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      },
      false
    )
  })
})()
