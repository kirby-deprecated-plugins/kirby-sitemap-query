<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
	$urls = kirby()->get('option', 'plugin.query.sitemap.xml.urls', array());
	if( ! empty( $urls ) ) {
		foreach( $urls as $row ) {
			if( ! empty( $row ) ) {
				echo "\t<url>\n";
				foreach( $row as $key => $value ) {
					echo "\t\t<" . $key . ">";
					echo $value;
					echo "</" . $key . ">\n";
				}
				echo "\t</url>\n";
			}
		}
	}
?>
</urlset>