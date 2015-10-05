Tooltip for Elgg
================
![Elgg 2.0](https://img.shields.io/badge/Elgg-2.0.x-orange.svg?style=flat-square)

Tooltip component for Elgg

## Features

* Integrates Tooltipster (http://iamceege.github.io/tooltipster)
* Developer-friendly API

![Tooltip](https://raw.github.com/hypeJunction/elgg_tooltip/master/screenshots/tooltip.png "Tooltip")

## Usage

To add a tooltip to a string or an html element, use `components/tooltip` view:

```php

$tooltip = elgg_view('components/tooltip', array(
	'text' => elgg_view('output/img', array(
		'src' => '/some/image.jpg',
	)),
	'content' => elgg_view_entity($entity, array(
		'full_view' => false,
	)),
));
```

Alternatively, you can just add `.elgg-tooltip` class and a `title="Some text"`
attribute to any html element:

```php

echo elgg_view('output/url', array(
	'text' => 'Click me',
	'href' => '/take/me/away',
	'class' => 'elgg-tooltip',
	'title' => 'This will show in a tooltip',
));
```