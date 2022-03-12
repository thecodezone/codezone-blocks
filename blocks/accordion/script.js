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

    function open(el) {
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

    function activePanel() {
      return block.querySelector('.' + ACTIVE_CLASS)
    }

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

    function handleTransitionStart() {
      return block.classList.add(TRANSITIONING_CLASS)
    }

    function handleTransitionEnd() {
       block.classList.remove(TRANSITIONING_CLASS)
      setCssVariables()
    }

    window.addEventListener('resize', setCssVariables);

    block.querySelectorAll('.cz-block--accordion-panel').forEach(function(el, idx) {
      let trigger = el.querySelector('.cz-accordion-panel__trigger')


      trigger.addEventListener('click', function() {
        open(el)
      })

      if (block.classList.contains('cz-accordion--hover')) {
        trigger.addEventListener('mouseover', function() {
          open(el)
        })
      }

      el.addEventListener('transitionend', handleTransitionStart)
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
