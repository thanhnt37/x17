<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Base
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'content',
        'user_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

    protected $presenter = \App\Presenters\ContactPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\ContactObserver);
    }

    // Relations
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }



    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'name'      => $this->name,
            'email'     => $this->email,
            'telephone' => $this->telephone,
            'content'   => $this->content,
            'user_id'   => $this->user_id,
        ];
    }

}
