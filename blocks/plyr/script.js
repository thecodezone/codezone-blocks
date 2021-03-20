document.addEventListener("DOMContentLoaded", function() {
	if (document.querySelector('.plyr__video-embed') && !document.querySelector('.block-editor')) {
		window.plyr = new Plyr('.plyr__video-embed');
	}

})
