<?php namespace App\Models;


/**
 * App\Models\Follower
 *
 * @property int                        $id
 * @property string                     $email
 * @property int|null                   $user_id
 * @property int|null                   $is_subscribe
 * @property \Carbon\Carbon             $created_at
 * @property \Carbon\Carbon             $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower whereIsSubscribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower whereUserId($value)
 * @mixin \Eloquent
 */
class Follower extends Base
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'followers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'user_id',
        'is_subscribe',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = [];

    protected $presenter = \App\Presenters\FollowerPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\FollowerObserver);
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
            'email'        => $this->email,
            'user_id'      => $this->user_id,
            'is_subscribe' => $this->is_subscribe,
        ];
    }

}
