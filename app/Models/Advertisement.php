<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

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

    protected $dates  = ['deleted_at'];

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
