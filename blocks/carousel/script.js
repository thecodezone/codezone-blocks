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
  var initializeBlock = function (block) {
    let container = block[0].querySelector(".swiper-container")
    let carousel = block[0].querySelector(".cz-block--carousel")
    carousel = carousel ? carousel : block[0]
    if (container) {
      // ACF renders <InnerBlocks /> server-side by wrapping the slides in a
      // .acf-innerblocks-container div. Swiper reads its slides from the
      // .swiper-wrapper's direct DOM children, so that wrapper div makes it
      // see zero slides. Unwrap it before Swiper ever looks at the DOM.
      let wrapper = container.querySelector(".swiper-wrapper")
      let innerWrap = wrapper && wrapper.querySelector(":scope > .acf-innerblocks-container")
      if (innerWrap) {
        while (innerWrap.firstChild) {
          wrapper.appendChild(innerWrap.firstChild)
        }
        innerWrap.remove()
      }

      const options = block[0].dataset.swiperOptions
        ? JSON.parse(carousel.dataset.swiperOptions)
        : []
      new Swiper(container, options)
    }
  }

  // Initialize each block on page load (front end).
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".cz-block--carousel").forEach(function (el) {
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
