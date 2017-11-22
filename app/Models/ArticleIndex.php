<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleIndex extends Base
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article_index';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'href',
        'parent_id',
        'article_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

    protected $presenter = \App\Presenters\ArticleIndexPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\ArticleIndexObserver);
    }

    // Relations
    public function parent()
    {
        return $this->belongsTo(\App\Models\ArticleIndex::class, 'parent_id', 'id');
    }

    public function article()
    {
        return $this->belongsTo(\App\Models\Article::class, 'article_id', 'id');
    }



    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'title'      => $this->title,
            'href'       => $this->href,
            'parent_id'  => $this->parent_id,
            'article_id' => $this->article_id,
        ];
    }

}
