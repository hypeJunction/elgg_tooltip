<?php

$image = elgg_view('output/img', array(
	'src' => '//lorempixel.com/200/200/food',
	'width' => 200,
	'height' => 200,
));

$view = elgg_view('theme_sandbox/javascript/tooltip.html');

$body = elgg_view('components/tooltip', [
	'text' => 'I have a tooltip!',
	'content' => elgg_view_image_block($image, $view),
]);

echo elgg_view_module('theme-sandbox-demo', 'Tooltip', $body);
