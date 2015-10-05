define(function (require) {

	var $ = require('jquery');

	if ($('.elgg-tooltip').length) {
		require(['jquery', 'components/classes/tooltip'], function ($, Tooltip) {
			var tp = new Tooltip($('.elgg-tooltip'));
			tp.init();
		});
	}
});