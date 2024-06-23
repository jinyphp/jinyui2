/**
 * Countdown timer
 * @requires https://github.com/letstri/timezz
 */

export default (() => {
  const timers = document.querySelectorAll('[data-countdown-date]')

  if (timers.length === 0) return

  // Date form demo purpose. This function adds 13 days to user's current date
  /* eslint-disable no-unused-vars */
  const demoDate = () => {
    const currentDate = new Date()

    currentDate.setDate(currentDate.getDate() + 13)

    const year = currentDate.getFullYear()
    const month = (currentDate.getMonth() + 1).toString().padStart(2, '0')
    const day = currentDate.getDate().toString().padStart(2, '0')
    const hours = '12'
    const minutes = '00'
    const seconds = '00'

    const formattedDate = `${month}/${day}/${year} ${hours}:${minutes}:${seconds}`

    return formattedDate
  }
  /* eslint-enable no-unused-vars */

  timers.forEach((timer) => {
    let date = timer.dataset.countdownDate

    if (date === 'demoDate') {
      date = demoDate()
    }

    /* eslint-disable no-undef */
    timezz(timer, {
      date,
      // add more options here
    })
    /* eslint-enable no-undef */
  })
})()
