<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Series
 *
 * @property int                    $id
 * @property string                 $slug
 * @property string                 $title
 * @property string|null            $keywords
 * @property string|null            $description
 * @property int|null               $voted
 * @property int|null               $read
 * @property int|null               $category_id
 * @property int|null               $cover_image_id
 * @property int|null               $is_enabled
 * @property \Carbon\Carbon|null    $publish_started_at
 * @property \Carbon\Carbon|null    $publish_ended_at
 * @property \Carbon\Carbon|null    $deleted_at
 * @property \Carbon\Carbon         $created_at
 * @property \Carbon\Carbon         $updated_at
 * @property-read \App\Models\Image $coverImage
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Series onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Series whereCoverImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Series whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Series whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Series whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Series whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Series whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Series whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Series withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Series withoutTrashed()
 * @mixin \Eloquent
 */
class Series extends Base
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'series';

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
        'voted',
        'read',
        'category_id',
        'cover_image_id',
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

    protected $presenter = \App\Presenters\SeriesPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\SeriesObserver);
    }

    // Relations
    public function articles()
    {
        return $this->hasMany(\App\Models\Article::class, 'series_id', 'id')->orderBy('id', 'asc');
    }

    public function coverImage()
    {
        return $this->hasOne(\App\Models\Image::class, 'id', 'cover_image_id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }



    // Utility Functions

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
            'voted'              => $this->voted,
            'read'               => $this->read,
            'category_id'        => $this->category_id,
            'cover_image_id'     => $this->cover_image_id,
            'is_enabled'         => $this->is_enabled,
            'publish_started_at' => $this->publish_started_at,
            'publish_ended_at'   => $this->publish_ended_at,
        ];
    }

}
