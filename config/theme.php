<?php

use App\Options\Options;

return [
	'post_types' => [
	],

	'taxonomies' => [
	],

	'options' => [
		Options::class,
	],

	'shortcodes' => [
	],

	'menus' => [
		'primary_navigation' => 'Primary Navigation',

		'secondary_navigation' => 'Secondary Navigation',
	],

	'assets' => [
		'styles' => [
		],

		'scripts' => [
		]
	],

	'image_sizes' => [
		'thumbnail' => [
			150, 150, true, false,
		],

		'medium' => [
			1000, 0, true, false,
		],

		'medium_large' => [
			1500, 0, true, false,
		],

		'large' => [
			2400, 1600, true, false,
		],
	],

    'supports' => [
        'enable' => [
            'post-formats' => [ 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ],
            'html5' => [ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ],
            'post-thumbnails',
            'title-tag',
        ],

        'disable' => [
            'block-templates',
            'core-block-patterns',
	        'woocommerce'
        ]
    ],
];