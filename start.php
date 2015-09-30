<?php

/**
 * Tooltip component
 *
 * @author Ismayil Khayredinov <info@hypejunction.com>
 * @copyright Copyright (c) 2015, Ismayil Khayredinov
 */

elgg_register_event_handler('init', 'system', 'elgg_tooltip_init');

/**
 * Initialize the plugin
 * @return void
 */
function elgg_tooltip_init() {

	elgg_define_js('tooltipster', array(
		'src' => '/mod/elgg_tooltip/vendors/tooltipster/js/jquery.tooltipster.min.js',
		'deps' => array('jquery'),
	));

	elgg_register_css('components/tooltip', '/mod/elgg_tooltip/vendors/tooltipster/css/tooltipster.css');

}