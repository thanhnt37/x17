<?php
namespace App\Models;

/**
 * App\Models\OauthRefreshToken
 *
 * @property int                 $id
 * @property string              $access_token_id
 * @property int                 $revoked
 * @property \Carbon\Carbon|null $expires_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereAccessTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereRevoked($value)
 * @mixin \Eloquent
 */
class OauthRefreshToken extends Base
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_refresh_tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'access_token_id',
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

//    protected $presenter = \App\Presenters\OauthRefreshTokenPresenter::class;

    // Relations
    public function accessToken()
    {
//            return $this->belongsTo(\App\Models\AccessToken::class, 'access_token_id', 'id');
    }

    // Utility Functions
}
