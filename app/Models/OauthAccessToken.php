<?php
namespace App\Models;

/**
 * App\Models\OauthAccessToken
 *
 * @property int                        $id
 * @property int|null                   $user_id
 * @property int                        $client_id
 * @property string|null                $name
 * @property string|null                $scopes
 * @property int                        $revoked
 * @property \Carbon\Carbon|null        $created_at
 * @property \Carbon\Carbon|null        $updated_at
 * @property \Carbon\Carbon|null        $expires_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereUserId($value)
 * @mixin \Eloquent
 */
class OauthAccessToken extends Base
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_access_tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'client_id',
        'name',
        'scopes',
        'revoked',
        'expires_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['expires_at'];

//    protected $presenter = \App\Presenters\OauthAccessTokenPresenter::class;

    // Relations
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function client()
    {
//        return $this->belongsTo(\App\Models\Client::class, 'client_id', 'id');
    }

    // Utility Functions
}
