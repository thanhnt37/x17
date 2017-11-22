<?php
namespace App\Models;

/**
 * App\Models\OauthClient
 *
 * @property int                        $id
 * @property int|null                   $user_id
 * @property string                     $name
 * @property string                     $secret
 * @property string                     $redirect
 * @property int                        $personal_access_client
 * @property int                        $password_client
 * @property int                        $revoked
 * @property \Carbon\Carbon|null        $created_at
 * @property \Carbon\Carbon|null        $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient wherePersonalAccessClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereUserId($value)
 * @mixin \Eloquent
 */
class OauthClient extends Base
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'secret',
        'redirect',
        'personal_access_client',
        'password_client',
        'revoked',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = [];

//    protected $presenter = \App\Presenters\OauthClientPresenter::class;

    // Relations
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    // Utility Functions
}
