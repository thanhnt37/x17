<?php namespace App\Models;


/**
 * App\Models\Search
 *
 * @property int            $id
 * @property string         $keyword
 * @property string         $slug
 * @property int|null       $count
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Search whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Search whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Search whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Search whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Search whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Search whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Search extends Base
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'searches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keyword',
        'slug',
        'count',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = [];

    protected $presenter = \App\Presenters\SearchPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\SearchObserver);
    }

    // Relations


    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'keyword' => $this->keyword,
            'slug'    => $this->slug,
            'count'   => $this->count,
        ];
    }

}
