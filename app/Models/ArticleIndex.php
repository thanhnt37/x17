<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ArticleIndex
 *
 * @property int                                $id
 * @property string                             $title
 * @property string                             $href
 * @property int|null                           $parent_id
 * @property int                                $article_id
 * @property \Carbon\Carbon|null                $deleted_at
 * @property \Carbon\Carbon                     $created_at
 * @property \Carbon\Carbon                     $updated_at
 * @property-read \App\Models\Article           $article
 * @property-read \App\Models\ArticleIndex|null $parent
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ArticleIndex onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereHref($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleIndex whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ArticleIndex withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ArticleIndex withoutTrashed()
 * @mixin \Eloquent
 */
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
