define(['elgg', 'jquery', 'tooltipster'], function (elgg, $) {

	var Tooltip = function ($elem) {
		this.$elem = $elem;
	};

	Tooltip.prototype = {
		construtor: Tooltip,
		init: function (options) {
			var self = this;
			var options = options || {};
			self.$elem.each(function () {
				if (!$(this).data('tooltipReady')) {
					var elem_options = $(this).data();
					$.extend(options, elem_options);
					if (options.target) {
						options.content = $(options.target).html();
					}
					var inst = $(this).tooltipster(options);
					$(this).data('tooltipReady', true);
				}
			});
		}
	};

	return Tooltip;
});