<?php
foreach( site()->index() as $page ) {	
	$url['priority'] = ( $page->isHomePage() ) ? 1 : '0.5';

	sitemapQuery::add(array(
		'loc' => $page->url(),
		'lastmod' => $page->modified('Y-m-d'),
		'priority' => $url['priority'],
	));
}