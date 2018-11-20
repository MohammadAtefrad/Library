<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $user_status
 * @property User[] $users
 */
class UserStatus extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
