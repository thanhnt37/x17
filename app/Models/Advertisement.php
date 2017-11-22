<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Advertisement
 *
 * @property int                 $id
 * @property string              $url
 * @property string              $type
 * @property string              $size
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon      $created_at
 * @property \Carbon\Carbon      $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertisement onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertisement withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertisement withoutTrashed()
 * @mixin \Eloquent
 */
class Advertisement extends Base
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'advertisements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'type',
        'size',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

    protected $presenter = \App\Presenters\AdvertisementPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\AdvertisementObserver);
    }

    // Relations


    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'id'   => $this->id,
            'url'  => $this->url,
            'type' => $this->type,
            'size' => $this->size,
        ];
    }

}
