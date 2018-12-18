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
Route::post('/search', ['as' => 'firstpage.search', 'uses' => 'FirstPageController@search']);

/*
 * book controller routes
 */
Route::get('/book/allbooks', ['as' => 'book.allbooks', 'uses' => 'BookController@all_books']);
Route::get('/book/{book}', ['as' => 'book.onebook', 'uses' => 'BookController@one_book']);
Route::get('/book/bycategory', ['as' => 'book.category', 'uses' => 'BookController@books_by_category']);
Route::get('/book/byalfabet', ['as' => 'book.alfabet', 'uses' => 'BookController@books_by_alfabet']);;
Route::post('/book/search', ['as' => 'book.search', 'uses' => 'BookController@search_book']);
Route::get('/books/reserve/{book}', ['as' => 'book.reserve', 'uses' => 'BookController@reserve_book']);
Route::get('/books/cancel-reserve/{event}/{book}', ['as' => 'book.cancel-reserve', 'uses' => 'BookController@cancel_reserve_book']);
Route::get('/books/borrow', ['as' => 'book.borrow', 'uses' => 'BookController@borrow_book']);
Route::get('/book/category/{category}', ['as' => 'category.books_by_category', 'uses' => 'BookController@books_by_category']);
Route::get('/book/alfabet/{letter}', ['as' => 'category.books_by_alfabet', 'uses' => 'BookController@books_by_alfabet']);
Route::post('/book/{book}/comment', ['as' => 'bookcomment.add', 'uses' => 'BookController@add_comment']);

/**
 * article controller routes
 */
Route::get('/article/allarticles', ['as' => 'article.allarticles', 'uses' => 'ArticleController@all_articles']);
Route::get('/article/{article}', ['as' => 'article.onearticle', 'uses' => 'ArticleController@one_article']);
Route::get('/article/bycategory', ['as' => 'article.category', 'uses' => 'ArticleController@articles_by_category']);
Route::get('/article/byalfabet', ['as' => 'article.alfabet', 'uses' => 'ArticleController@articles_by_alfabet']);
Route::post('/article/search', ['as' => 'article.search', 'uses' => 'ArticleController@search_article']);
Route::get('/article/download', ['as' => 'article.download', 'uses' => 'ArticleController@download_article']);
Route::get('/article/category/{category}', ['as' => 'category.articles_by_category', 'uses' => 'ArticleController@articles_by_category']);
Route::get('/article/alfabet/{letter}', ['as' => 'category.articles_by_alfabet', 'uses' => 'ArticleController@articles_by_alfabet']);
Route::post('/article/{article}/comment', ['as' => 'articlecomment.add', 'uses' => 'ArticleController@add_comment']);

/**
 * post controller routes
 */
Route::get('/post/allposts', ['as' => 'post.allposts', 'uses' => 'postController@all_posts']);
Route::get('/post/{post}', ['as' => 'post.onepost', 'uses' => 'postController@one_post']);
Route::get('/post/bycategory', ['as' => 'post.category', 'uses' => 'postController@posts_by_category']);
Route::get('/post/byalfabet', ['as' => 'post.alfabet', 'uses' => 'postController@posts_by_alfabet']);
Route::post('/post/search', ['as' => 'post.search', 'uses' => 'postController@search_post']);
Route::get('/post/download', ['as' => 'post.download', 'uses' => 'postController@download_post']);
Route::post('/post/{post}/comment', ['as' => 'postcomment.add', 'uses' => 'postController@add_comment']);

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
    Route::get('/user/index', ['as' => 'user.index', 'uses' => 'UserController@index']);
    Route::post('/user/{user}', ['as' => 'user.updateprofile', 'uses' => 'UserController@update_profile']);
    Route::get('/user/factors', ['as' => 'user.factors', 'uses' => 'UserController@factors']);
    Route::get('/user/{factor}', ['as' => 'user.factor', 'uses' => 'UserController@factor']);
    Route::get('/user/factors', ['as' => 'user.factors', 'uses' => 'UserController@factors']);
    Route::get('/user/usersbookarticle', ['as' => 'user.bookarticle', 'uses' => 'UserController@users_book_article']);
    Route::get('/user/{comments}', ['as' => 'user.comments', 'uses' => 'UserController@comments']);
    Route::get('/user/{messages}', ['as' => 'user.messages', 'uses' => 'UserController@messages']);
    Route::get('/user/sendmessage', ['as' => 'user.sendmessage', 'uses' => 'UserController@send_message']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
