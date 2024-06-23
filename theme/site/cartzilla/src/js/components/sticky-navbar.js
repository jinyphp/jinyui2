/**
 * Stuck navbar to the top on page scroll
 */

export default (() => {
  const navbar = document.querySelector('[data-sticky-navbar]')
  if (!navbar) return

  const navbarHeight = navbar.clientHeight

  /// Function to add classes to the header and referenced elements
  const handleStickyNavbar = () => {
    const { offset = 200 } = JSON.parse(navbar.dataset.stickyNavbar || '{}')
    const offsetValue = parseInt(offset, 10)

    if (
      window.scrollY >= offsetValue &&
      !navbar.classList.contains('navbar-stuck')
    ) {
      // Add padding-top to the body to compensate for the height of navbar-stuck
      document.body.style.paddingTop = `${navbarHeight}px`

      navbar.classList.add('fixed-top', 'navbar-stuck')
    } else if (
      window.scrollY < offsetValue &&
      navbar.classList.contains('navbar-stuck')
    ) {
      // Remove padding-top from the body when navbar is no longer stuck
      document.body.style.paddingTop = '0'

      navbar.classList.remove('fixed-top', 'navbar-stuck')
    }
  }

  // Function to debounce the scroll event
  const debounce = (func, wait) => {
    let timeout
    return (...args) => {
      const later = () => {
        timeout = null
        func(...args)
      }
      clearTimeout(timeout)
      timeout = setTimeout(later, wait)
    }
  }

  // Attach the debounced scroll event handler
  window.addEventListener('scroll', debounce(handleStickyNavbar, 5))

  // Initial call to handleStickyNavbar to set initial state based on page load position
  handleStickyNavbar()
})()
