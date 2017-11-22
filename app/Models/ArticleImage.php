<?php
namespace App\Models;

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
