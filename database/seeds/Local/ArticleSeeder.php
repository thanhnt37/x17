<?php

namespace Seeds\Local;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder {
    public function run() {
        foreach( range( 1, 10 ) as $index ) {
            $image = factory( Image::class )->create(
                [
                    'url' => 'http://placehold.it/1400x900/588C73/EEDF92',
                ]
            );
            $article = factory( Article::class )->create();

            factory( ArticleImage::class )->create(
                [
                    'article_id' => $article->id,
                    'image_id'   => $image->id,
                ]
            );
        }
    }
}
