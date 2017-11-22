<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Log
 *
 * @property int                 $id
 * @property string              $user_name
 * @property string              $email
 * @property string              $action
 * @property string              $table
 * @property int                 $record_id
 * @property string              $query
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon      $created_at
 * @property \Carbon\Carbon      $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereUserName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log withoutTrashed()
 * @mixin \Eloquent
 */
class Log extends Base
{

    const TYPE_ACTION_SELECT = 'select';
    const TYPE_ACTION_INSERT = 'create';
    const TYPE_ACTION_UPDATE = 'update';
    const TYPE_ACTION_DELETE = 'delete';

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'email',
        'action',
        'table',
        'record_id',
        'query',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

    protected $presenter = \App\Presenters\LogPresenter::class;

    // Relations

    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'id'        => $this->id,
            'user_name' => $this->user_name,
            'email'     => $this->email,
            'action'    => $this->action,
            'table'     => $this->table,
            'record_id' => $this->record_id,
            'query'     => $this->query,
        ];
    }

}
