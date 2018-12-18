<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
 * firstpage controller routes
 */
Route::get('/', ['as' => 'firstpage.index', 'uses' => 'FirstPageController@index']);
Route::get('/contact', ['as' => 'firstpage.contactus', 'uses' => 'FirstPageController@contact_us']);
Route::get('/search', ['as' => 'firstpage.search', 'uses' => 'FirstPageController@search']);

/*
 * book controller routes
 */
Route::get('/books/allbooks', ['as' => 'book.allbooks', 'uses' => 'BookController@all_books']);
Route::get('/books/{book}', ['as' => 'book.onebook', 'uses' => 'BookController@one_book']);
Route::get('/books/bycategory', ['as' => 'book.category', 'uses' => 'BookController@books_by_category']);
Route::get('/books/byalfabet', ['as' => 'book.alfabet', 'uses' => 'BookController@books_by_alfabet']);;
Route::get('/books/search', ['as' => 'book.search', 'uses' => 'BookController@search_book']);
Route::get('/books/reserve', ['as' => 'book.reserve', 'uses' => 'BookController@reserve_book']);
Route::get('/books/category/{category}', ['as' => 'category.books_by_category', 'uses' => 'BookController@books_by_category']);
Route::get('/books/alfabet/{letter}', ['as' => 'category.books_by_alfabet', 'uses' => 'BookController@books_by_alfabet']);
Route::post('/books/{book}/comment', ['as' => 'bookcomment.add', 'uses' => 'BookController@add_comment']);

/**
 * article controller routes
 */
Route::get('/articles/allarticles', ['as' => 'article.allarticles', 'uses' => 'ArticleController@all_articles']);
Route::get('/articles/{article}', ['as' => 'article.onearticle', 'uses' => 'ArticleController@one_article']);
Route::get('/articles/bycategory', ['as' => 'article.category', 'uses' => 'ArticleController@articles_by_category']);
Route::get('/articles/byalfabet', ['as' => 'article.alfabet', 'uses' => 'ArticleController@articles_by_alfabet']);
Route::get('/articles/search', ['as' => 'article.search', 'uses' => 'AarticleController@search_article']);
Route::get('/articles/download', ['as' => 'article.download', 'uses' => 'ArticleController@download_article']);
Route::get('/articles/category/{category}', ['as' => 'category.articles_by_category', 'uses' => 'ArticleController@articles_by_category']);
Route::get('/articles/alfabet/{letter}', ['as' => 'category.articles_by_alfabet', 'uses' => 'ArticleController@articles_by_alfabet']);
Route::post('/articles/{article}/comment', ['as' => 'articlecomment.add', 'uses' => 'ArticleController@add_comment']);

/**
 * post controller routes
 */
Route::get('/posts/allposts', ['as' => 'post.allposts', 'uses' => 'postController@all_posts']);
Route::get('/posts/{post}', ['as' => 'post.onepost', 'uses' => 'postController@one_post']);
Route::get('/posts/bycategory', ['as' => 'post.category', 'uses' => 'postController@posts_by_category']);
Route::get('/posts/byalfabet', ['as' => 'post.alfabet', 'uses' => 'postController@posts_by_alfabet']);
Route::get('/posts/search', ['as' => 'post.search', 'uses' => 'postController@search_post']);
Route::get('/posts/download', ['as' => 'post.download', 'uses' => 'postController@download_post']);
Route::post('/posts/{post}/comment', ['as' => 'postcomment.add', 'uses' => 'postController@add_comment']);

/**
 * category controller routes
 */


/**
 * comment controller routes
 */


/**
 * user controller routes
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/users/index', ['as' => 'user.index', 'uses' => 'UserController@index']);
    Route::post('/users/{user}', ['as' => 'user.updateprofile', 'uses' => 'UserController@update_profile']);
    Route::get('/users/factors', ['as' => 'user.factors', 'uses' => 'UserController@factors']);
    Route::get('/users/{factor}', ['as' => 'user.factor', 'uses' => 'UserController@factor']);
    Route::get('/users/factors', ['as' => 'user.factors', 'uses' => 'UserController@factors']);
    Route::get('/users/usersbookarticle', ['as' => 'user.bookarticle', 'uses' => 'UserController@users_book_article']);
    Route::get('/users/{comments}', ['as' => 'user.comments', 'uses' => 'UserController@comments']);
    Route::get('/users/{messages}', ['as' => 'user.messages', 'uses' => 'UserController@messages']);
    Route::get('/users/sendmessage', ['as' => 'user.sendmessage', 'uses' => 'UserController@send_message']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
