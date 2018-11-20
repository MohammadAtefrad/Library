<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $article_id
 * @property int $comment_status_id
 * @property string $body
 * @property int $reference_comment_id
 * @property Article $article
 * @property CommentStatus $commentStatus
 * @property User $user
 */
class ArticleComment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'article_id', 'comment_status_id', 'body', 'reference_comment_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo('App\Article');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commentStatus()
    {
        return $this->belongsTo('App\CommentStatus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
