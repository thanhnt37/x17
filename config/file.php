<?php

return [
    'acceptable' => [
        'file'  => [
            'application/pdf'          => 'pdf',
            'application/octet-stream' => '',
            'application/zip'          => 'zip',
            'text/plain'               => 'txt',
        ],
        'image' => [
            'image/png'  => 'png',
            'image/jpeg' => 'jpg',
            'image/gif'  => 'gif',
        ],
    ],
    'categories' => [
        'article_cover_image' => [
            'name'        => 'article_cover_image',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [970, 250],
            'thumbnails'  => [
                [560, 390], // hot article in home page
                [420, 340], // newest article in home page
                [730, 350], // cover image in page detail
                [300, 500], // hot article in category page
            ],
            'seed_prefix' => 'article_cover',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/articles/'
        ],
        'article_image'       => [
            'name'        => 'article_image',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [1440, 0],
            'thumbnails'  => [
                [400, 300],
            ],
            'seed_prefix' => 'article',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/articles/'
        ],
        'user_profile_image'  => [
            'name'        => 'user_profile_image',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [500, 500],
            'thumbnails'  => [
                [100, 100],
                [200, 200]
            ],
            'seed_prefix' => 'user_profile',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/users/'
        ],
        'ogp_image'           => [
            'name'        => 'ogp_image',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [1280, 628],
            'thumbnails'  => [
            ],
            'seed_prefix' => 'ogp',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/ogp/'
        ],
        'twitter_card_image'  => [
            'name'        => 'twitter_card_image',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [1024, 512],
            'thumbnails'  => [
            ],
            'seed_prefix' => 'twitter_card',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/ogp/'
        ],
    ],
];
