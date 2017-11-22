<?php namespace App\Models;


/**
 * App\Models\AdminUserNotification
 *
 * @property int                        $id
 * @property int                        $user_id
 * @property string                     $category_type
 * @property string                     $type
 * @property array                      $data
 * @property string                     $content
 * @property string                     $locale
 * @property int                        $read
 * @property \Carbon\Carbon             $sent_at
 * @property \Carbon\Carbon             $created_at
 * @property \Carbon\Carbon             $updated_at
 * @property-read \App\Models\AdminUser $adminUser
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereCategoryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AdminUserNotification whereUserId($value)
 * @mixin \Eloquent
 */
class AdminUserNotification extends Notification
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin_user_notifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category_type',
        'type',
        'data',
        'content',
        'locale',
        'read',
        'sent_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['sent_at'];

    protected $presenter = \App\Presenters\AdminUserNotificationPresenter::class;

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\AdminUserNotificationObserver);
    }

    // Relations
    public function adminUser()
    {
        return $this->belongsTo(\App\Models\AdminUser::class, 'user_id', 'id');
    }



    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'id'            => $this->id,
            'user_id'       => $this->user_id,
            'category_type' => $this->category_type,
            'type'          => $this->type,
            'data'          => $this->data,
            'content'       => $this->content,
            'locale'        => $this->locale,
            'read'          => $this->read,
            'sent_at'       => $this->sent_at,
        ];
    }

}
