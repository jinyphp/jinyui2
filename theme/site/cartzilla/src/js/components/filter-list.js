/**
 * Search, sort and filter lists and tables
 * @requires https://listjs.com/
 */

export default (() => {
  const filterListContainers = document.querySelectorAll('[data-filter-list]')

  if (filterListContainers.length === 0) return

  // Clear button functions
  const createClearButton = (container, searchField) => {
    const clearButton = document.createElement('button')
    clearButton.className =
      'btn btn-sm btn-outline-secondary w-auto border-0 p-1 position-absolute top-50 end-0 translate-middle-y me-2 opacity-0'
    clearButton.innerHTML = `
      <svg class="opacity-75" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
        <path d="M18.619 5.381a.875.875 0 0 1 0 1.238l-12 12A.875.875 0 0 1 5.38 17.38l12-12a.875.875 0 0 1 1.238 0Z"/><path d="M5.381 5.381a.875.875 0 0 1 1.238 0l12 12a.875.875 0 1 1-1.238 1.238l-12-12a.875.875 0 0 1 0-1.238Z"/>
      </svg>
    `
    container.appendChild(clearButton)
    updateClearButtonVisibility(searchField, clearButton)
    return clearButton
  }

  const updateClearButtonVisibility = (searchField, clearButton) => {
    clearButton.classList.toggle('opacity-0', searchField.value === '')
  }

  const clearSearchField = (searchField, clearButton) => {
    searchField.value = ''
    updateClearButtonVisibility(searchField, clearButton)
  }

  // Init list filtering
  /* eslint-disable no-unused-vars, no-undef */
  const filterLists = [...filterListContainers].map((filterListsEl) => {
    const options = JSON.parse(filterListsEl.dataset.filterList)
    const searchFields = filterListsEl.querySelectorAll(
      '.' + options.searchClass
    )

    if (searchFields.length) {
      const clearButton = createClearButton(
        searchFields[0].parentNode,
        searchFields[0]
      )
      searchFields.forEach((searchField) => {
        searchField.addEventListener('input', () => {
          updateClearButtonVisibility(searchField, clearButton)
        })
      })

      clearButton.addEventListener('click', () => {
        searchFields.forEach((searchField) => {
          clearSearchField(searchField, clearButton)
        })
        filterList.search()
      })
    }

    const filterList = new List(filterListsEl, options)

    return filterList
  })
  /* eslint-enable no-unused-vars, no-undef */
})()
