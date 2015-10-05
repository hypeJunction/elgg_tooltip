<?php

// check how the plugin was installed
$path = file_exists(__DIR__ . '/vendor/autoload.php') ? __DIR__ : '';

return array(
	'default' => array(
		'tooltipster.js' => $path . '/vendor/bower-asset/tooltipster/js/jquery.tooltipster.min.js',
		'tooltipster.css' => $path . '/vendor/bower-asset/tooltipster/css/tooltipster.css',
	)
);