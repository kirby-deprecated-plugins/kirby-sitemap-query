<?php
class SitemapQuery {
	public static function add($args) {
		$rows = kirby()->get('option', 'plugin.query.sitemap.xml.urls', array());
		if( is_string( $args ) ) {
			$rows[]['loc'] = $args;
		} else {
			$rows[] = $args;
		}

		kirby()->set('option', 'plugin.query.sitemap.xml.urls', $rows);
	}
}