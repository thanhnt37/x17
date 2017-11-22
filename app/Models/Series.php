<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Series
 *
 * @property int                    $id
 * @property string                 $name
 * @property string|null            $description
 * @property int|null               $cover_image_id
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
        'name',
        'description',
        'cover_image_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

    protected $presenter = \App\Presenters\SeriesPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\SeriesObserver);
    }

    // Relations
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
            'id'             => $this->id,
            'name'           => $this->name,
            'description'    => $this->description,
            'cover_image_id' => $this->cover_image_id,
        ];
    }

}
