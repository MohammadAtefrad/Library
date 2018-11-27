<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $message_priority
 * @property string $created_at
 * @property string $updated_at
 * @property Message[] $messages
 */
class MessagePriority extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['message_priority', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Message', 'priority_id');
    }
}
