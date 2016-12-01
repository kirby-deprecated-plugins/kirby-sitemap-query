# Kirby Sitemap Query

*Version 0.1*

A sitemap xml plugin without boundaries.

**Add this to the snippet `sitemap-query.php`:**

```php
sitemapQuery::add('https://example.com/contact');
sitemapQuery::add(array(
  'loc' => 'https://example.com/about',
  'lastmod' => '2004-11-23',
  'priority' => '0.3',
  'changefreq' => 'weekly'
));
```

## Installation

Use one of the alternatives below.

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```
$ cd path/to/kirby
$ kirby plugin:install jenstornell/kirby-sitemap-query
```

### 2. Clone or download

1. [Clone](https://github.com/jenstornell/kirby-sitemap-query.git) or [download](https://github.com/jenstornell/kirby-sitemap-query/archive/master.zip)  this repository.
2. Unzip the archive if needed and rename the folder to `kirby-sitemap-query`.

**Make sure that the plugin folder structure looks like this:**

```
site/plugins/kirby-sitemap-query/
```

### 3. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/jenstornell/kirby-sitemap-query site/plugins/kirby-sitemap-query
```

## Usage

Add a snippet to `site/snippets/sitemap-query.php` if that is your folder structure.

### Add urls to the sitemap

If you send a string, it will be interpreted as url.

```php
sitemapQuery::add('https://example.com');
sitemapQuery::add('https://example.com/about');
sitemapQuery::add('https://example.com/contact');
```

### Add urls with arguments

If you send an array, you can add the arguments you want.

```php
sitemapQuery::add(array(
  'loc' => 'https://example.com/about',
  'lastmod' => '2004-11-23',
  'priority' => '0.3',
  'changefreq' => 'weekly'
));
```

Read more about the arguments here: https://www.sitemaps.org/sv/protocol.html

### Fallback

If you don't add a snippet it will fallback to the snippet below:

```php
<?php
foreach( site()->index() as $page ) {	
	$url['priority'] = ( $page->isHomePage() ) ? 1 : '0.5';

	sitemapQuery::add(array(
		'loc' => $page->url(),
		'lastmod' => $page->modified('Y-m-d'),
		'priority' => $url['priority'],
	));
}
```

### Results

The result will look like this on your domain `http://example.com/sitemap.xml`:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>http://localhost/kirby/2.4.0/projects</loc>
		<lastmod>2016-11-15</lastmod>
		<priority>0.5</priority>
	</url>
	<url>
		<loc>http://localhost/kirby/2.4.0/projects/project-a</loc>
		<lastmod>2016-11-04</lastmod>
		<priority>0.5</priority>
	</url>
</urlset>
```

## Options

The following options can be set in your `/site/config/config.php` file:

```php
c::set('plugin.sitemap.query.url', 'sitemap.xml');
c::set('plugin.sitemap.snippet.query', 'sitemap-query');
c::set('plugin.sitemap.snippet.template', 'sitemap-template');
```

### url

Change the url `sitemap.xml` if you want.

### snippet.query

The snippet query file is `snippet-query.php` but you can change it if you want.

### snippet.template

The snippet template file is `snippet-template.php` but you can change it if you want.

## Changelog

**0.1**

- Initial release

## Requirements

- [**Kirby**](https://getkirby.com/) 2.3+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/kirby-sitemap-query/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)