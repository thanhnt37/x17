<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

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
        'series_id',
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
        if ($this->publish_started_at <= $now && ($this->publish_ended_at == null || $now <= $this->publish_ended_at) && $this->is_enabled) {
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
            'series_id'          => $this->series_id,
            'is_enabled'         => $this->is_enabled,
            'publish_started_at' => $this->publish_started_at,
            'publish_ended_at'   => $this->publish_ended_at,
        ];
    }

}
