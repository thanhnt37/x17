<?php
namespace App\Models;

/**
 * App\Models\ArticleImage
 *
 * @property int                      $id
 * @property int                      $article_id
 * @property int                      $image_id
 * @property \Carbon\Carbon           $created_at
 * @property \Carbon\Carbon           $updated_at
 * @property-read \App\Models\Article $article
 * @property-read \App\Models\Image   $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleImage whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleImage whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ArticleImage extends Base
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'image_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = [];

    protected $presenter = \App\Presenters\ArticleImagePresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\ArticleImageObserver);
    }

    // Relations
    public function article()
    {
        return $this->belongsTo(\App\Models\Article::class, 'article_id', 'id');
    }

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class, 'image_id', 'id');
    }



    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'article_id' => $this->article_id,
            'image_id'   => $this->image_id,
        ];
    }

}
