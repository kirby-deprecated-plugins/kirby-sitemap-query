<?php
kirby()->routes(array(
	array(
		'pattern' => c::get('plugin.sitemap.query.url', 'sitemap.xml'),
		'action' => function() {
			header("Content-type: text/xml");
			snippet( c::get('plugin.sitemap.query.snippet.query', 'sitemap-query') );
			snippet( c::get('plugin.sitemap.query.snippet.template', 'sitemap-template') );
		}
	),
));