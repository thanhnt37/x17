<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Base
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'wildcard',
        'color',
        'order',
        'parent_id',
        'cover_image_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

    protected $presenter = \App\Presenters\CategoryPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\CategoryObserver);
    }

    // Relations
    public function parent()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id', 'id');
    }

    public function coverImage()
    {
        return $this->hasOne(\App\Models\Image::class, 'id', 'cover_image_id');
    }

    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'name'           => $this->name,
            'slug'           => $this->slug,
            'wildcard'       => $this->wildcard,
            'color'          => $this->color,
            'order'          => $this->order,
            'parent_id'      => $this->parent_id,
            'cover_image_id' => $this->cover_image_id,
        ];
    }

}
