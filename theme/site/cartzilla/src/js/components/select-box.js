/**
 * Single / multiple select with search and sorting, tags components
 * @requires https://github.com/Choices-js/Choices
 */

export default (() => {
  let selects = document.querySelectorAll('[data-select]')

  if (selects.length === 0) return

  const defaultOptions = {
    allowHTML: true,
    searchPlaceholderValue: 'Search...',
    removeItemButton: true,
    editItems: true,
    searchEnabled: false,
    shouldSort: false,
    itemSelectText: '',
    classNames: {
      containerInner: 'form-select',
    },
  }

  selects.forEach((select) => {
    let dataAttr = select.getAttribute('data-select'),
      template = select.getAttribute('data-select-template'),
      userOptions,
      options

    if (dataAttr !== '') userOptions = JSON.parse(dataAttr)

    if (template !== null) {
      options = {
        ...defaultOptions,
        ...userOptions,
        /* eslint-disable indent */
        callbackOnCreateTemplates: function (template) {
          return {
            item: ({ classNames }, data) => {
              return template(`
                <div class="${classNames.item} ${
                  data.highlighted
                    ? classNames.highlightedState
                    : classNames.itemSelectable
                } ${
                  data.placeholder ? classNames.placeholder : ''
                }" data-item data-id="${data.id}" data-value="${data.value}" ${
                  data.active ? 'aria-selected="true"' : ''
                } ${data.disabled ? 'aria-disabled="true"' : ''}>
                    ${data.placeholder || !data.customProperties.selected ? data.label : data.customProperties.selected}
                  ${userOptions.removeItemButton === false ? '' : `<button type="button" class="choices__button" aria-label="Remove item" data-button></button>`}
                </div>
              `)
            },
            choice: ({ classNames }, data) => {
              return template(`
                <div class="${classNames.item} ${classNames.itemChoice} ${
                  data.disabled
                    ? classNames.itemDisabled
                    : classNames.itemSelectable
                } ${
                  data.placeholder ? classNames.placeholder : ''
                }" data-select-text="${this.config.itemSelectText}" data-choice ${
                  data.disabled
                    ? 'data-choice-disabled aria-disabled="true"'
                    : 'data-choice-selectable'
                } data-id="${data.id}" data-value="${data.value}" ${
                  data.groupId > 0 ? 'role="treeitem"' : 'role="option"'
                }>
                  <div>
                    ${data.label}
                    ${(() => {
                      let output = ''
                      for (const key in data.customProperties) {
                        if (
                          Object.prototype.hasOwnProperty.call(
                            data.customProperties,
                            key
                          ) &&
                          key !== 'selected'
                        ) {
                          output += data.customProperties[key]
                        }
                      }
                      return output
                    })()}
                  </div>
                </div>
              `)
            },
          }
        },
        /* eslint-enable indent */
      }
    } else {
      options = { ...defaultOptions, ...userOptions }
    }

    /* eslint-disable no-unused-vars, no-undef */
    const choices = new Choices(select, options)
    /* eslint-enable no-unused-vars, no-undef */
  })
})()
