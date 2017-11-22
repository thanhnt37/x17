<?php namespace App\Models;


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
        'alias',
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
            'alias'   => $this->alias,
            'count'   => $this->count,
        ];
    }

}
