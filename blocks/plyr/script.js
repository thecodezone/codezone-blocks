(function($){

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
		var embed = block[0].querySelector('.plyr__video-embed')
		if (embed) {
			console.log(embed)
			new Plyr(embed);
		}
	}

	// Initialize each block on page load (front end).
	document.addEventListener("DOMContentLoaded", function() {
		document.querySelectorAll('.cz-block--plyr').forEach(function(el) {
			initializeBlock([el])
		})
	})

	// Initialize dynamic block preview (editor).
	if( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=cz-plyr', initializeBlock );
	}
})(jQuery);