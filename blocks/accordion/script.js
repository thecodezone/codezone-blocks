;(function () {
  /**
   * initializeBlock
   *
   * Adds custom JavaScript to the block HTML.
   *
   * @date    15/4/19
   * @since   1.0.0
   *
   * @param   object $block The block jQuery element.
   * @param   object attributes The block attributes (only available when editing).
   * @return  void
   */
  var ACTIVE_CLASS = "cz-accordion-panel--active"
  var TRANSITIONING_CLASS = "cz-accordion-panel--transitioning"

  var initializeBlock = function (root) {
    var block = root[0].classList.contains('cz-block--accordion') ? root[0] : root[0].querySelector('.cz-block--accordion')
    var transitionSpeed = block.dataset.transitionSpeed
    var canOpen = true

    /**
     * Open a panel
     * @param el
     */
    function open(el) {
      if (!canOpen) {
        return
      }
      blockOpen()
      block.querySelectorAll('.cz-block--accordion-panel').forEach(function(panel) {
        if (panel === el) {
          if (!panel.classList.contains(ACTIVE_CLASS)) {
            panel.classList.add(ACTIVE_CLASS)
          }
        } else {
          panel.classList.remove(ACTIVE_CLASS)
        }
      })
    }

    /**
     * Return the currently active panel
     * @returns {any}
     */
    function activePanel() {
      return block.querySelector('.' + ACTIVE_CLASS)
    }

    /**
     * Set css variables based on the current state of the accordion
     */
    function setCssVariables() {
      var activeEl = activePanel()
      block.style.setProperty('--cz-accordion-height', block.offsetHeight + "px");
      block.style.setProperty('--cz-accordion-width', block.offsetWidth + "px");

      if (activeEl) {
        var computedStyle = window.getComputedStyle(activeEl)
        var panelWidth = activeEl.clientWidth
        block.style.setProperty('--cz-accordion-panel-width', panelWidth + "px")
        block.style.setProperty('--cz-accordion-panel-height', activeEl.offsetHeight + "px")
      }

      block.querySelectorAll('.cz-block--accordion-panel').forEach(function(panel) {
        panel.style.setProperty('--cz-accordion-panel-height', panel.scrollHeight + "px")
      })

      block.classList.remove('cz-accordion--loading')
    }

    function blockOpen () {
      canOpen = false
      setTimeout(function() {
        canOpen = true
      }, transitionSpeed);
    }

    /**
     * Fires when transitions start
     */
    function handleTransitionStart() {
      return block.classList.add(TRANSITIONING_CLASS)
    }

    /**
     * Fires when transitions end
     */
    function handleTransitionEnd() {
       block.classList.remove(TRANSITIONING_CLASS)
      setCssVariables()
    }

    /**
     * Update CSS variables when the window resizes
     */
    window.addEventListener('resize', setCssVariables);

    /**
     * For each accordion panel
     */
    block.querySelectorAll('.cz-block--accordion-panel').forEach(function(el, idx) {
      /**
       * The invisible element that handles clicks when closed
       */
      let trigger = el.querySelector('.cz-accordion-panel__trigger')


      /**
       * Open the panel on click
       */
      trigger.addEventListener('click', function() {
        open(el)
      })

      /**
       * If hover support is turned on, open the panel on hover.
       */
      if (block.classList.contains('cz-accordion--hover')) {
        trigger.addEventListener('mouseover', function() {
          if (block.classList.contains(TRANSITIONING_CLASS)) {
            return
          }
          open(el)
        })
      }

      el.addEventListener('transitionend', handleTransitionEnd)
      el.addEventListener('transitionstart', handleTransitionStart)

      if (!idx) {
       open(el)
      }
    })

    setCssVariables()
  }

  // Initialize each block on page load (front end).
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".cz-block--accordion").forEach(function (el) {
      initializeBlock([el])
    })
  })

  // Initialize dynamic block preview (editor).
  //if (window.acf) {
  //  window.acf.addAction(
  //    "render_block_preview/type=cz-carousel",
  //    initializeBlock
  //  )
  //}
})()
