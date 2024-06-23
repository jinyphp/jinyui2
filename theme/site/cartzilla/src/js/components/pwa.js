/**
 * Register a Service Worker and add PWA features like installing prompts,
 * but only if the HTML tag has data-pwa="true". Unregister service worker if not.
 */

export default (() => {
  const htmlElement = document.documentElement

  // Check the 'data-pwa' attribute of the HTML element
  if (htmlElement.getAttribute('data-pwa') !== 'true') {
    // Unregister the service worker if it's registered and 'data-pwa' is not 'true'
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.getRegistrations().then((registrations) => {
        for (let registration of registrations) {
          registration.unregister()
        }
      })
    }
    return // Stop further execution to prevent PWA setup when not specified
  }

  // Settings
  const SETTINGS = {
    appName: 'Cartzilla',
    remindAfterHours: 24, // Number of hours to wait before showing the prompt again
    serviceWorkerFile: '/service-worker.js', // Service worker file path and name
    serviceWorkerScope: '/', // Scope of the service worker
    diagnostics: false, // Set to true to enable diagnostic logs
  }

  /**
   * Helper function for logging messages to the console based on the message type.
   * @param {string} message - The message to log.
   * @param {string} type - The type of message ('info' or 'error').
   */
  const logMessage = (message, type = 'info') => {
    if (SETTINGS.diagnostics) {
      if (type === 'error') {
        console.error(message)
      } else {
        console.log(message)
      }
    }
  }

  // Helper functions for detecting user's operating system and browser
  const userAgent = window.navigator.userAgent.toLowerCase()

  const detectOS = () => {
    if (userAgent.includes('android')) return 'Android'
    if (/iphone|ipad|ipod/.test(userAgent)) return 'iOS'
    if (userAgent.includes('mac')) return 'macOS'
    if (userAgent.includes('win')) return 'Windows'
    if (userAgent.includes('cros')) return 'ChromeOS'
    if (userAgent.includes('linux')) return 'Linux'
    return 'Unknown'
  }

  const detectBrowser = () => {
    if (userAgent.includes('chrome') && !userAgent.includes('edg'))
      return 'Chrome'
    if (userAgent.includes('safari') && !userAgent.includes('chrome'))
      return 'Safari'
    if (userAgent.includes('firefox')) return 'Firefox'
    if (userAgent.includes('edg')) return 'Edge'
    if (userAgent.includes('opera') || userAgent.includes('opr')) return 'Opera'
    return 'Unknown'
  }

  // Register service worker
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker
        .register(SETTINGS.serviceWorkerFile, {
          scope: SETTINGS.serviceWorkerScope,
        })
        .then((registration) => {
          // Registration was successful
          logMessage(
            'Service Worker registration successful with scope: ' +
              registration.scope
          )
        })
        .catch((err) => {
          // Registration failed
          logMessage('Service Worker registration failed: ' + err, 'error')
        })
    })
  }

  // Store variables for future use across application
  const promptId = 'installPWAPrompt'
  const timeoutKey = `${SETTINGS.appName}-Prompt-Timeout`
  const foreverKey = `${SETTINGS.appName}-Prompt-Dismiss-Forever`
  const installedKey = `${SETTINGS.appName}-App-Installed`

  // Initialize deferredPrompt for use later to show the install prompt
  let deferredPrompt

  // Function to create and show an installation prompt
  const installationPrompt = () => {
    // Detecting user's browser
    const browser = detectBrowser()

    // Check if we should show the prompt
    const now = Date.now()
    const setupTime = localStorage.getItem(timeoutKey)
    const dismissForever = localStorage.getItem(foreverKey)
    const appInstalled = localStorage.getItem(installedKey)

    // Check if dismiss forever is set to true or app installed, or not enough time has passed
    if (
      dismissForever === 'true' ||
      appInstalled === 'true' ||
      (setupTime &&
        now - setupTime < SETTINGS.remindAfterHours * 60 * 60 * 1000)
    ) {
      return
    }

    // HTML content for the prompt
    const promptHTML = `
      <div class="modal fade" id="${promptId}" tabindex="-1" aria-labelledby="${promptId}Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body text-center">
              <svg class="d-inline-block mb-3" xmlns="http://www.w3.org/2000/svg" width="95" viewBox="0 0 250 283.6"><g stroke="#9ca3af" stroke-miterlimit="10"><path d="M.7 283.5V37.4C.7 17.3 17 .9 37.2.9h175.4C232.7.9 249 17.2 249 37.4v246.1" fill="none"/><path d="M240.2 41.7V283H9.5V41.7c0-17.6 14-31.9 31.5-31.9h167.9c17.2-.1 31.3 14.2 31.3 31.9z" fill="none"/><path d="M146.2,41.3h-45.1c-4.8,0-8.7-3.9-8.7-8.7s3.9-8.7,8.7-8.7h45.1c4.8,0,8.7,3.9,8.7,8.7S151.1,41.3,146.2,41.3z" fill="none"/></g><path class="d-none-dark" d="M144.9 37.6c2.7 0 5-2.2 5-5a4.95 4.95 0 0 0-5-5c-2.7 0-5 2.2-5 5s2.3 5 5 5z" fill="#cad0d9"/><path class="d-none d-block-dark" d="M144.9 37.6c2.7 0 5-2.2 5-5a4.95 4.95 0 0 0-5-5c-2.7 0-5 2.2-5 5s2.3 5 5 5z" fill="#4e5562"/><path d="M68.2 120.3H40.4c-7.6 0-13.9-6.2-13.9-13.8V80.8c0-7.6 6.2-13.8 13.9-13.8h27.8c7.6 0 13.9 6.2 13.9 13.8v25.7c-.1 7.6-6.3 13.8-13.9 13.8zm70.4 0h-27.8c-7.6 0-13.9-6.2-13.9-13.8V80.8c0-7.6 6.2-13.8 13.9-13.8h27.8c7.6 0 13.9 6.2 13.9 13.8v25.7c-.1 7.6-6.2 13.8-13.9 13.8zm70.5 0h-27.8c-7.6 0-13.9-6.2-13.9-13.8V80.8c0-7.6 6.2-13.8 13.9-13.8h27.8c7.6 0 13.9 6.2 13.9 13.8v25.7c0 7.6-6.3 13.8-13.9 13.8zM68.2 190.9H40.4c-7.6 0-13.9-6.2-13.9-13.8v-25.7c0-7.6 6.2-13.9 13.9-13.9h27.8c7.6 0 13.9 6.2 13.9 13.9V177c-.1 7.6-6.3 13.9-13.9 13.9zm140.9 0h-27.8c-7.6 0-13.9-6.2-13.9-13.8v-25.7c0-7.6 6.2-13.9 13.9-13.9h27.8c7.6 0 13.9 6.2 13.9 13.9V177c0 7.6-6.3 13.9-13.9 13.9zM68.2 261.2H40.4c-7.6 0-13.9-6.2-13.9-13.8v-25.7c0-7.6 6.2-13.9 13.9-13.9h27.8c7.6 0 13.9 6.2 13.9 13.9v25.7c-.1 7.8-6.3 13.8-13.9 13.8zm70.4 0h-27.8c-7.6 0-13.9-6.2-13.9-13.8v-25.7c0-7.6 6.2-13.9 13.9-13.9h27.8c7.6 0 13.9 6.2 13.9 13.9v25.7c-.1 7.8-6.2 13.8-13.9 13.8zm70.5 0h-27.8c-7.6 0-13.9-6.2-13.9-13.8v-25.7c0-7.6 6.2-13.9 13.9-13.9h27.8c7.6 0 13.9 6.2 13.9 13.9v25.7c0 7.8-6.3 13.8-13.9 13.8z" stroke="#9ca3af" fill="none"/><path d="M140.7 196H109c-9.3 0-16.9-7.6-16.9-16.9v-29.3c0-9.3 7.6-16.9 16.9-16.9h31.7c9.3 0 16.9 7.6 16.9 16.9v29.3c.1 9.3-7.4 16.9-16.9 16.9z" fill="#f55266"/><path d="M125.8 172.9c-.8 0-1.7-.5-2-1.5-.3-1.2.2-2.4 1.4-2.7l13.6-4.4-2.2-14.6-23.6 8.1c-1.2.3-2.4-.2-2.7-1.4s.2-2.4 1.4-2.7l24.6-8.5c1-.3 2-.2 2.9.3s1.4 1.4 1.5 2.2l2.4 16.3c.2 1.7-.8 3.6-2.7 4.1l-13.9 4.4c-.2.3-.5.4-.7.4zm13.1.2c-.3-1.2-1.5-1.9-2.7-1.4-.3 0-6.4 1.9-9.1 2.9-4.1 1.4-5.8 0-6.1-.2l-11.7-14.9c-2.4-3.4-6.1-3.6-7.8-3l-5.6 1.7-.8 4.7 7.5-2.4c.3 0 2-.3 3.2 1.4l11.9 15.2c1.4 1.7 3.6 2.4 5.9 2.4 1.7 0 3.2-.3 4.7-.8l9-2.7c1.2-.5 1.9-1.7 1.6-2.9zM128 185.3a3.4 3.4 0 1 1-6.8 0 3.4 3.4 0 1 1 6.8 0zm15.1-3.9a3.4 3.4 0 1 1-6.8 0 3.4 3.4 0 1 1 6.8 0z" fill="#fff"/></svg>
              <h5 class="pt-1" id="${promptId}Label">Install Cartzilla app</h5>
              ${browser === 'Safari' ? `<p class="fs-sm mb-0">Add Cartzilla to your home screen for quick and easy access to your shopping anytime, anywhere! Tap the <span class="fw-semibold">"Share"</span> icon in Safari and select <span class="fw-semibold">"Add to Home Screen"</span> from the options.</p>` : `<p class="fs-sm mb-0">Add Cartzilla to your home screen for quick and easy access to your shopping anytime, anywhere!</p>`}
              <div class="d-flex flex-column align-items-center gap-3 pt-4">
                ${
                  browser === 'Safari'
                    ? `
                  <div class="d-flex justify-content-center gap-3 w-100">
                    <button type="button" class="btn btn-secondary pe-3 w-100" id="timeoutPWAButton">
                      <i class="ci-clock fs-base me-1 ms-n2"></i>
                      Remind later
                    </button>
                    <button type="button" class="btn btn-outline-secondary pe-3 w-100" id="dismissPWAButton">
                      <i class="ci-close fs-base me-1 ms-n2"></i>
                      Dismiss forever
                    </button>
                  </div>
                `
                    : `
                  <div class="d-flex justify-content-center gap-3 w-100">
                    <button type="button" class="btn btn-primary w-100" id="installPWAButton">
                      <i class="ci-download fs-base me-1 ms-n1"></i>
                      Install
                    </button>
                    <button type="button" class="btn btn-secondary w-100" id="timeoutPWAButton">
                      <i class="ci-clock fs-base me-1 ms-n2"></i>
                      Remind later
                    </button>
                  </div>
                  <button type="button" class="btn btn-outline-secondary border-0 mb-n1" id="dismissPWAButton">
                    <i class="ci-close fs-lg me-1 ms-n2"></i>
                    Dismiss forever
                  </button>
                `
                }
              </div>
            </div>
          </div>
        </div>
      </div>
      `

    // Append the prompt HTML to the body
    document.body.insertAdjacentHTML('beforeend', promptHTML)

    // Get prompt instance
    const promptElement = document.getElementById(promptId)
    /* eslint-disable no-undef */
    const promptInstance = new bootstrap.Modal(promptElement, {
      backdrop: 'static', // Optional: makes prompt not close when clicking outside
      keyboard: false, // Optional: makes prompt not close when pressing escape key
    })
    /* eslint-enable no-undef */

    // Show the prompt
    promptInstance.show()

    // Log the message
    logMessage('PWA installation prompt has been displayed.')

    // Event listeners to remove the prompt from the DOM when dismissed
    document
      .getElementById('timeoutPWAButton')
      .addEventListener('click', () => {
        promptInstance.hide()
        localStorage.setItem(timeoutKey, Date.now()) // Set the new timeout value when dismissed
      })

    document
      .getElementById('dismissPWAButton')
      .addEventListener('click', () => {
        promptInstance.hide()
        localStorage.setItem(foreverKey, true) // Set the foreverKey value to true
      })

    promptElement.addEventListener('hidden.bs.modal', () => {
      promptInstance.dispose() // Ensure the prompt is cleaned up correctly
      promptElement.remove() // Remove the prompt from the DOM
    })
  }

  // Handling appinstalled event for cases when PWA installed from the address bar or other browser components
  window.addEventListener('appinstalled', () => {
    localStorage.setItem(installedKey, true) // Set the installedKey value to true
    deferredPrompt = null // Clear the deferredPrompt so it can be garbage collected
    logMessage('PWA was installed') // Log message
  })

  // Funtion for initialization and configuration of Progressive Web App (PWA) installation prompts based on the user's operating system and browser
  const setupPWAInstallation = () => {
    const os = detectOS()
    const browser = detectBrowser()

    // Check if the PWA is already installed
    const isInStandaloneMode = () =>
      ('standalone' in navigator && navigator.standalone) ||
      window.matchMedia('(display-mode: standalone)').matches

    if (os === 'iOS' && browser === 'Safari') {
      // Specific instructions for Safari on iOS
      setTimeout(() => {
        if (!isInStandaloneMode()) {
          installationPrompt()
          logMessage('PWA installation prompt has been displayed.')
        }
      }, 3500)
    } else if (
      os !== 'iOS' &&
      (browser === 'Chrome' || browser === 'Edge' || browser === 'Opera')
    ) {
      // Setup for Chrome, Edge, and Opera on non-iOS devices
      if (!isInStandaloneMode()) {
        window.addEventListener('beforeinstallprompt', (e) => {
          // Log message
          logMessage(`'beforeinstallprompt' event was fired.`)
          // Prevent the mini-infobar from appearing on mobile
          e.preventDefault()
          // Stash the event so it can be triggered later
          deferredPrompt = e
          // Show the installation prompt to the user
          setTimeout(() => {
            installationPrompt()
          }, 3500)
        })

        // Handle "Install" button click event
        document.body.addEventListener('click', (e) => {
          const target = e.target

          // Check if the clicked element is an "Install" button
          if (target.id === 'installPWAButton') {
            const promptElement = document.getElementById(promptId)
            /* eslint-disable no-undef */
            const promptInstance = bootstrap.Modal.getInstance(promptElement)
            /* eslint-enable no-undef */

            if (promptInstance) {
              promptInstance.hide() // Hide the prompt
            }

            deferredPrompt.prompt() // Show the installation prompt
            deferredPrompt.userChoice.then((choiceResult) => {
              if (choiceResult.outcome === 'accepted') {
                logMessage('User accepted the A2HS prompt. PWA was installed')
                localStorage.setItem(installedKey, true) // Set the installedKey value to true
              } else {
                logMessage('User dismissed the A2HS prompt')
                localStorage.setItem(timeoutKey, Date.now()) // Set the new timeout value
              }
              deferredPrompt = null // We've used the prompt and can't use it again, throw it away
            })
          }
        })
      }
    } else {
      logMessage('PWA installation is not supported on your device or browser.')
    }
  }

  // Call the setup function
  setupPWAInstallation()
})()
