<?php
include __DIR__ . DS . 'core' . DS . 'class.php';
include __DIR__ . DS . 'core' . DS . 'routes.php';

$kirby->set(
	'snippet',
	c::get('plugin.sitemap.query.snippet.template', 'sitemap-template'),
	__DIR__ . DS . 'core' . DS . 'template.php'
);

$kirby->set(
	'snippet',
	c::get('plugin.sitemap.query.snippet.query', 'sitemap-query'),
	__DIR__ . DS . 'core' . DS . 'query.php'
);