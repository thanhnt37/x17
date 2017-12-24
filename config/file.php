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
        'article_970x250' => [
            'name'        => 'article_970x250',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [970, 250],
            'thumbnails'  => [],
            'seed_prefix' => 'article_cover',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/articles/'
        ],
        'article_560x390' => [
            'name'        => 'article_560x390',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [560, 390],
            'thumbnails'  => [],
            'seed_prefix' => 'article_cover',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/articles/'
        ],
        'article_420x340' => [
            'name'        => 'article_420x340',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [420, 340],
            'thumbnails'  => [],
            'seed_prefix' => 'article_cover',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/articles/'
        ],
        'article_730x350' => [
            'name'        => 'article_730x350',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [730, 350],
            'thumbnails'  => [],
            'seed_prefix' => 'article_cover',
            'format'      => 'png',
            'local_type'  => 'common',
            'local_path'  => 'img/articles/'
        ],
        'article_300x500' => [
            'name'        => 'article_300x500',
            'type'        => 'image',
            'region'      => env('AWS_IMAGE_REGION'),
            'buckets'     => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'        => [300, 500],
            'thumbnails'  => [],
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
