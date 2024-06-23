/**
 * Gallery like styled lightbox component for presenting various types of media
 * @requires https://github.com/biati-digital/glightbox
 */

export default (() => {
  const lightboxEl = document.querySelector('[data-glightbox]')

  if (lightboxEl === null) return

  // Check the dir attribute on html tag and set the default to "ltr" if it's not set or invalid
  const htmlElement = document.documentElement
  const direction =
    htmlElement.getAttribute('dir') === 'ltr' ||
    htmlElement.getAttribute('dir') === 'rtl'
      ? htmlElement.getAttribute('dir')
      : 'ltr'

  const customLightboxHTML = `<div id="glightbox-body" class="glightbox-container">
    <div class="gloader visible"></div>
    <div class="goverlay"></div>
    <div class="gcontainer">
      <div id="glightbox-slider" class="gslider"></div>
      <button class="gnext gbtn btn btn-icon btn-outline-secondary animate-slide-end bg-body rounded-circle end-0 me-2 me-sm-3 me-lg-4 ms-0" style="top: 45%; right: auto; left: auto" tabindex="0" aria-label="Next">
        <span class="animate-target">
          <svg class="rtl-flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.4 5.6c.3-.3.9-.3 1.2 0l6 6c.3.3.3.9 0 1.2l-6 6c-.3.3-.9.3-1.2 0-.4-.3-.4-.8 0-1.2l5.4-5.4-5.4-5.3C9 6.5 9 6 9.4 5.6"/></svg>
        </span
      </button>
      <button class="gprev gbtn btn btn-icon btn-outline-secondary animate-slide-start bg-body rounded-circle start-0 ms-2 ms-sm-3 ms-lg-4 me-0" style="top: 45%; right: auto; left: auto" tabindex="1" aria-label="Previous">
        <span class="animate-target">
        <svg class="rtl-flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.6 5.6c.4.4.4.9 0 1.3l-5.4 5.4 5.4 5.4c.3.3.3.9 0 1.2s-.9.3-1.2 0l-6-6c-.4-.4-.4-.9 0-1.3l6-6c.3-.3.9-.3 1.2 0"/></svg>
        </span>
      </button>
      <button class="gclose gbtn btn btn-icon btn-outline-secondary bg-body rounded-circle top-0 end-0 mt-2 me-2 mt-md-3 me-md-3" style="right: auto; left: auto" tabindex="2" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.6 17.4c.3.3.3.9 0 1.2s-.9.3-1.2 0L12 13.2l-5.4 5.4c-.3.3-.9.3-1.2 0s-.3-.9 0-1.2l5.4-5.4-5.4-5.4c-.4-.3-.4-.9 0-1.2.3-.4.9-.4 1.2 0l5.4 5.4 5.4-5.4c.3-.3.9-.3 1.2 0s.3.9 0 1.2L13.2 12z"/></svg>
      </button>
    </div>
  </div>`

  const cssEffects =
    direction === 'rtl'
      ? {
          slide: { out: 'slideOutRight', in: 'slideInLeft' },
          slideBack: { out: 'slideOutLeft', in: 'slideInRight' },
        }
      : {
          slide: { out: 'slideOutLeft', in: 'slideInRight' },
          slideBack: { out: 'slideOutRight', in: 'slideInLeft' },
        }

  /* eslint-disable no-unused-vars, no-undef */
  const lightbox = GLightbox({
    selector: '[data-glightbox]',
    lightboxHTML: customLightboxHTML,
    openEffect: 'fade',
    closeEffect: 'fade',
    closeOnOutsideClick: false,
    videosWidth: '1200px',
    draggable: direction === 'rtl' ? false : true,
    touchNavigation: direction === 'rtl' ? false : true,
    cssEfects: cssEffects,
  })
  /* eslint-enable no-unused-vars, no-undef */
})()
