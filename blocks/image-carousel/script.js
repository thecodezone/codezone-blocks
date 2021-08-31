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
		let container = block[0].querySelector('.swiper-container')
		let carousel = block[0].querySelector('.cz-block--image-carousel')
		carousel = carousel ? carousel : block[0]
		if (container) {
			const options = carousel.dataset.swiperOptions ? JSON.parse(carousel.dataset.swiperOptions) : []
			options['navigation'] = {
				'nextEl': carousel.querySelector('.swiper-button-next'),
				'prevEl': carousel.querySelector('.swiper-button-prev')
			}
			new Swiper(container, options);
		}
	}

	// Initialize each block on page load (front end).
	document.addEventListener("DOMContentLoaded", function() {
		document.querySelectorAll('.cz-block--image-carousel').forEach(function(el) {
			initializeBlock([el])
		})
	})

	// Initialize dynamic block preview (editor).
	if( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=cz-image-carousel', initializeBlock );
	}
})();
