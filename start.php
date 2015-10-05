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

	elgg_extend_view('elgg/components.css', 'tooltipster.css');
	elgg_extend_view('elgg.js', 'components/tooltip.js');
}