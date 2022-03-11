

(function(){

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
	var initializeBlock = function( block ) {
		var el = block[0].classList.contains('cz-block--parallax') ? block[0] : block[0].querySelector('.cz-block--parallax')
        if (!el.dataset.basicScrollConfig) {
            return;
        }
		var config = JSON.parse(el.dataset.basicScrollConfig)
		config['elem'] = el
		config['direct'] = true
        try {
            var instance = basicScroll.create(config)
            instance.start()
        } catch (ex) {
            //do nothing
        }
	}

	// Initialize each block on page load (front end).
	document.addEventListener("DOMContentLoaded", function() {
		document.querySelectorAll('.cz-block--parallax').forEach(function(el) {
			initializeBlock([el])
		})
	})

	// Initialize dynamic block preview (editor).
	//if( window.acf ) {
	//	window.acf.addAction( 'render_block_preview/type=cz-parallax', initializeBlock );
	//}
})();
