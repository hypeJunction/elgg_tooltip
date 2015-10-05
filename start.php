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

	elgg_register_simplecache_view('components/tooltip.css');
	elgg_extend_view('elgg.css', 'components/tooltip.css');
	elgg_extend_view('admin.css', 'components/tooltip.css');
	elgg_extend_view('elgg.js', 'components/tooltip.js');

	elgg_extend_view('theme_sandbox/javascript', 'theme_sandbox/javascript/tooltip');
}