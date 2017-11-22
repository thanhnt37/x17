<?php

namespace Seeds\Local;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\ArticleIndex;
use App\Models\Category;
use App\Models\Image;
use App\Models\Series;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();
        foreach ($categories as $category)
        {
            // set cover_image for category
            $image = factory(Image::class)->create(
                [
                    'url' => "http://placehold.it/730x95",
                ]
            );
            $category->cover_image_id = $image->id;
            $category->save();

            // create normal article
            foreach (range(3, 10) as $numberNormalArticle)
            {
                $article = factory(Article::class)->create(
                    [
                        'series_id'   => 0,
                        'category_id' => $category->id
                    ]
                );

                $imageSize = config('file.categories.article_cover_image.thumbnails');
                array_push($imageSize, config('file.categories.article_cover_image.size'));
                foreach ($imageSize as $size)
                {
                    $image = factory(Image::class)->create(
                        [
                            'url' => "http://placehold.it/$size[0]x$size[1]",
                        ]
                    );
                    factory(ArticleImage::class)->create(
                        [
                            'article_id' => $article->id,
                            'image_id'   => $image->id,
                        ]
                    );
                }

                // create index
                foreach (range(3, 8) as $index) {
                    factory(ArticleIndex::class)->create(
                        [
                            'article_id' => $article->id,
                        ]
                    );
                }
            }

            // create series
            foreach (range(1, 3) as $numberSeries)
            {
                $image = factory(Image::class)->create(
                    [
                        'url' => 'http://placehold.it/650x240',
                    ]
                );
                $series = factory(Series::class)->create(
                    [
                        'category_id'    => $category->id,
                        'cover_image_id' => $image->id
                    ]
                );

                foreach (range(7, 20) as $numberSeriesArtile)
                {
                    $article = factory(Article::class)->create(
                        [
                            'series_id'   => $series->id,
                            'category_id' => $category->id
                        ]
                    );

                    $imageSize = config('file.categories.article_cover_image.thumbnails');
                    array_push($imageSize, config('file.categories.article_cover_image.size'));
                    foreach ($imageSize as $size)
                    {
                        $image = factory(Image::class)->create(
                            [
                                'url' => "http://placehold.it/$size[0]x$size[1]",
                            ]
                        );
                        factory(ArticleImage::class)->create(
                            [
                                'article_id' => $article->id,
                                'image_id'   => $image->id,
                            ]
                        );
                    }
                    
                    // create index
                    foreach (range(3, 8) as $index) {
                        factory(ArticleIndex::class)->create(
                            [
                                'article_id' => $article->id,
                            ]
                        );
                    }
                }
            }
        }
    }
}
