require(['jquery'], function ($) {

	function init() {
		if ($('.elgg-tooltip').length) {
			require(['jquery', 'components/classes/tooltip'], function ($, Tooltip) {
				var tp = new Tooltip($('.elgg-tooltip'));
				tp.init();
			});
		}
	}

	init();
	$(document).ajaxComplete(init);
});