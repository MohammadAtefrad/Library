<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $book_category
 * @property Book[] $books
 */
class BookCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['book_category'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
