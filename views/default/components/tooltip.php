<?php

/**
 * @uses $vars['text']    Text
 * @uses $vars['content'] Tooltip content
 */
$text = elgg_extract('text', $vars);
$content = elgg_extract('content', $vars);

if (!$text || !$content) {
	return;
}

elgg_load_css('components/tooltip');
elgg_require_js('components/tooltip');

$id = md5($content);
echo elgg_format_element('div', [
	'id' => $id,
	'class' => 'hidden'
		], $content);

$params = $vars;
$params['class'] = (array) elgg_extract('class', $params, []);
$params['class'][] = 'elgg-tooltip';
$params['data-target'] = "#$id";

echo elgg_format_element('span', $params, $text);
