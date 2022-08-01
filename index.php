<?php
/**
 * 
 * 
 */

Kirby::plugin('acedinstitute/aced-core', [
    /**
     * 
     * Config options are registered with the options extension. The extension accepts an array of options 
     * with their default values. The default values will be used if the options are not overwritten 
     * in the site config.
     * 
     * Config options can be used anywhere in Kirby with the $kirby->option() method:
     * 
     * $kirby->option('yourname.yourplugin.option');
     * $kirby->option('yourname.yourplugin.another-option.with-a-nested-option');
     * 
     * Or with the option() helper:
     * 
     * option('yourname.yourplugin.option');
     * option('yourname.yourplugin.another-option.with-a-nested-option');
     * 
     */
    'options' => [
        'production' => false,
    ],
    /**
     * 
     * Snippets are registered with the snippets extension. The extension accepts an array of 
     * key/value pairs, where the key is the name of the snippet and the value the path to the 
     * file in your plugin folder.
     * 
     * 
     */
    'snippets' => [
        'core/head/meta' => __DIR__ . '/snippets/core/head/meta.php',
        'core/head/seo' => __DIR__ . '/snippets/core/head/seo.php',
        'core/head/social/fb-opengraph' => __DIR__ . '/snippets/core/head/social/fb-opengraph.php',
        'core/head/social/twitter-card' => __DIR__ . '/snippets/core/head/social/twitter-card.php',
        'core/head/link-rel' => __DIR__ . '/snippets/core/head/link-rel.php',
        'core/head/favicon' => __DIR__ . '/snippets/core/head/favicon.php',
        'core/site/sitemap' => __DIR__ . '/snippets/core/site/sitemap.php',

    ],

    /**
     * 
     * Templates are registered with the templates extension. The extension accepts an array of 
     * key/value pairs, where the key is the name of the template and the value the path to the 
     * file in your plugin folder.
     * 
     * 'templates' => [
     *   'blog' => __DIR__ . '/templates/blog.php'
     *   ] 
     * 
     */
    'templates' => [
    ],
    /**
     * 
     * Blueprints are registered with the blueprints extension.
     * 
     * The blueprints extension accepts an array of key/value pairs, where the key is the name of 
     * the blueprint and the value the path to the file in your plugin folder.
     * 
     *  'blueprints' => [
     *    'pages/blog' => __DIR__ . '/blueprints/blog.yml'
     *  ]
     * 
     */    
    'blueprints' => [
        'core/site' => __DIR__ . '/blueprints/site.yml',
        'core/fields/country' => __DIR__ . '/blueprints/fields/country.yml',
        'core/fields/year' => __DIR__ . '/blueprints/fields/year.yml',
        'core/files/image' => __DIR__ . '/blueprints/files/image.yml',
        'core/files/pdf' => __DIR__ . '/blueprints/files/pdf.yml',
        'core/layouts/content' => __DIR__ . '/blueprints/layouts/content.yml',
        'core/sections/media' => __DIR__ . '/blueprints/sections/media.yml',
        'core/sections/meta' => __DIR__ . '/blueprints/sections/meta.yml',
        'core/sections/content/body' => __DIR__ . '/blueprints/sections/content/body.yml',
        'core/sections/content/meta' => __DIR__ . '/blueprints/sections/content/meta.yml',
        'core/sections/site/cookie' => __DIR__ . '/blueprints/sections/site/cookie.yml',
        'core/sections/site/metadata' => __DIR__ . '/blueprints/sections/site/metadata.yml',
        'core/sections/site/social' => __DIR__ . '/blueprints/sections/site/social.yml',
        'core/sections/site/miscelaneous' => __DIR__ . '/blueprints/sections/site/miscelaneous.yml',
        'core/sections/site/system' => __DIR__ . '/blueprints/sections/site/system.yml',
        'core/sections/site/web' => __DIR__ . '/blueprints/sections/site/web.yml',
        'core/tabs/content' => __DIR__ . '/blueprints/tabs/content.yml',
        'core/tabs/media' => __DIR__ . '/blueprints/tabs/media.yml',
        'core/tabs/meta' => __DIR__ . '/blueprints/tabs/meta.yml',
        'core/tabs/site/main' => __DIR__ . 'blueprints/tabs/site/main.yml',
        'core/tabs/site/metadata' => __DIR__ . '/blueprints/tabs/site/metadata.yml',
    ],
    /**
     * 
     * Translations are registered with the translations extension. It takes an array of languages, 
     * where each language consists of an array of key/value pairs.
     */
    'translations' => [
        'en' => [

        ],
    ],
    /**
     * 
     */
    'hooks' => [

    ],
    /**
     * 
     */
    'fieldMethods' => [
    ],
    'routes' => [
        /**
		 * /sitemap.xml
		 */
		[
			'pattern' => 'sitemap.xml',
			'action'  => function() {
				$pages = site()->pages()->index();

				// fetch the pages to ignore from the config settings,
				$ignore = kirby()->option('sitemap.ignore', ['error']);
				$content = snippet('core/site/sitemap', compact('pages', 'ignore'), true);
			
				// return response with correct header type
				return new Kirby\Cms\Response($content, 'application/xml');
			}
		],
		/**
		 * /sitemap - redirects user to /sitemap.xml
		 */
		[
			'pattern' => 'sitemap',
			'action'  => function() {
				return go('sitemap.xml', 301);
			}
		],

    ]
]);
