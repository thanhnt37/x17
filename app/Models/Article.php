<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * App\Models\Article
 *
 * @property int                          $id
 * @property string                       $slug
 * @property string                       $title
 * @property string|null                  $keywords
 * @property string|null                  $description
 * @property string                       $content
 * @property int|null                     $voted
 * @property int|null                     $read
 * @property int|null                     $series_id
 * @property int|null                     $category_id
 * @property int|null                     $is_enabled
 * @property \Carbon\Carbon|null          $publish_started_at
 * @property \Carbon\Carbon|null          $publish_ended_at
 * @property \Carbon\Carbon|null          $deleted_at
 * @property \Carbon\Carbon               $created_at
 * @property \Carbon\Carbon               $updated_at
 * @property-read \App\Models\Series|null $series
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article
 *         findSimilarSlugs(\Illuminate\Database\Eloquent\Model $model, $attribute, $config, $slug)
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Article onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article wherePublishEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article wherePublishStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereSeriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Article withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Article withoutTrashed()
 * @mixin \Eloquent
 */
class Article extends Base
{

    use SoftDeletes;
    use Sluggable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'title',
        'keywords',
        'description',
        'content',
        'voted',
        'read',
        'series_id',
        'category_id',
        'is_enabled',
        'publish_started_at',
        'publish_ended_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['publish_started_at', 'publish_ended_at', 'deleted_at'];

    protected $presenter = \App\Presenters\ArticlePresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\ArticleObserver);
    }

    // Relations
    public function series()
    {
        return $this->belongsTo(\App\Models\Series::class, 'series_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }

    // define for Sluggable
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    // Utility Functions
    public function isEnabled()
    {
        $now = date("Y-m-d H:i:s");
        if ($this->publish_started_at <= $now && ($this->publish_ended_at == null || $now <= $this->publish_ended_at) && $this->is_enabled)
        {
            return true;
        }

        return false;
    }

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'slug'               => $this->slug,
            'title'              => $this->title,
            'keywords'           => $this->keywords,
            'description'        => $this->description,
            'content'            => $this->content,
            'voted'              => $this->voted,
            'read'               => $this->read,
            'series_id'          => $this->series_id,
            'category_id'        => $this->category_id,
            'is_enabled'         => $this->is_enabled,
            'publish_started_at' => $this->publish_started_at,
            'publish_ended_at'   => $this->publish_ended_at,
        ];
    }

}
