/**
 * Animates the scrolling of the page when an attribute tag that points to an anchor is clicked.
 */
(function(window, document) {
	$(function() {
		$('a[href^="#"]').click(function(e) {
			e.preventDefault();
			var hash = this.hash;
			var target = $(hash);
			$('html')
					.stop()
					.animate(
					{ 'scrollTop': target.offset().top },
					1000,
					'easeInOutCubic',
					function() {
						window.location.hash = hash;
					});
			return false;
		});
	});
} (this, document));