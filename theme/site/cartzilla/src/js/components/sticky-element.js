/**
 * Stuck navbar to the top on page scroll
 */

export default (() => {
  const stickyElements = document.querySelectorAll('[data-sticky-element]')
  if (stickyElements.length === 0) return
  const observer = new IntersectionObserver(
    ([e]) => e.target.classList.toggle('is-stuck', e.intersectionRatio < 1),
    {
      threshold: [1],
      rootMargin: '0px 0px 100% 0px',
    }
  )
  stickyElements.forEach((element) => {
    observer.observe(element)
  })
})()
