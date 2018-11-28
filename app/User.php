<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $role_id
 * @property int $user_status_id
 * @property string $firstname
 * @property string $lastname
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $image
 * @property string $phone
 * @property string $personal_code
 * @property int $penalty
 * @property string $created_at
 * @property string $updated_at
 * @property Role $role
 * @property UserStatus $userStatus
 * @property ArticleComment[] $articleComments
 * @property ArticleUser[] $articleUsers
 * @property BookComment[] $bookComments
 * @property BookUser[] $bookUsers
 * @property Factor[] $factors
 * @property Message[] $messages
 * @property Message[] $messages
 * @property PostComment[] $postComments
 * @property Post[] $posts
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['role_id', 'user_status_id', 'firstname', 'lastname', 'name', 'username', 'email', 'email_verified_at', 'password', 'remember_token', 'image', 'phone', 'personal_code', 'penalty', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userStatus()
    {
        return $this->belongsTo('App\UserStatus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articleComments()
    {
        return $this->hasMany('App\ArticleComment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articleUsers()
    {
        return $this->hasMany('App\ArticleUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookComments()
    {
        return $this->hasMany('App\BookComment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookUsers()
    {
        return $this->hasMany('App\BookUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factors()
    {
        return $this->hasMany('App\Factor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Message', 'from_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages2()
    {
        return $this->hasMany('App\Message', 'to_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postComments()
    {
        return $this->hasMany('App\PostComment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
