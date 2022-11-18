(function () {
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
    var el = block[0].classList.contains("cz-block--reveal")
      ? block[0]
      : block[0].querySelector(".cz-block--reveal");
    var config = JSON.parse(el.dataset.revealConfig);
    var animation = JSON.parse(el.dataset.revealAnimation);

    if (animation.viewOffset !== false && !animation.viewOffset) {
      const offset = Math.floor(window.innerHeight * 0.1);
      animation.viewOffset = { top: offset, bottom: offset };
    }

    ScrollReveal(config).reveal(el, animation);
  };

  // Initialize each block on page load (front end).
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".cz-block--reveal").forEach(function (el) {
      initializeBlock([el]);
    });
  });

  // Initialize dynamic block preview (editor).
  //if( window.acf ) {
  //	window.acf.addAction( 'render_block_preview/type=cz-reveal', initializeBlock );
  //}
})();
