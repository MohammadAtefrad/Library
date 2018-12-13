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
Route::get('/book/allbooks', ['as' => 'book.allbooks', 'uses' => 'BookController@all_books']);
Route::get('/book/{book}', ['as' => 'book.onebook', 'uses' => 'BookController@one_book']);
Route::get('/book/bycategory', ['as' => 'book.category', 'uses' => 'BookController@books_by_category']);
Route::get('/book/byalfabet', ['as' => 'book.alfabet', 'uses' => 'BookController@books_by_alfabet']);;
Route::get('/book/search', ['as' => 'book.search', 'uses' => 'BookController@search_book']);
Route::get('/book/reserve', ['as' => 'book.reserve', 'uses' => 'BookController@reserve_book']);
Route::get('/book/category/{category}', ['as' => 'category.books_by_category', 'uses' => 'BookController@books_by_category']);
Route::get('/book/alfabet/{letter}', ['as' => 'category.books_by_alfabet', 'uses' => 'BookController@books_by_alfabet']);

/**
 * article controller routes
 */
Route::get('/article/allarticles', ['as' => 'article.allarticles', 'uses' => 'ArticleController@all_articles']);
Route::get('/article/{article}', ['as' => 'article.onearticle', 'uses' => 'ArticleController@one_article']);
Route::get('/article/bycategory', ['as' => 'article.category', 'uses' => 'ArticleController@articles_by_category']);
Route::get('/article/byalfabet', ['as' => 'article.alfabet', 'uses' => 'ArticleController@articles_by_alfabet']);
Route::get('/article/search', ['as' => 'article.search', 'uses' => 'AarticleController@search_article']);
Route::get('/article/download', ['as' => 'article.download', 'uses' => 'ArticleController@download_article']);
Route::get('/article/category/{category}', ['as' => 'category.articles_by_category', 'uses' => 'ArticleController@articles_by_category']);
Route::get('/article/alfabet/{letter}', ['as' => 'category.articles_by_alfabet', 'uses' => 'ArticleController@articles_by_alfabet']);

/**
 * post controller routes
 */
Route::get('/post/allposts', ['as' => 'post.allposts', 'uses' => 'postController@all_posts']);
Route::get('/post/{post}', ['as' => 'post.onepost', 'uses' => 'postController@one_post']);
Route::get('/post/bycategory', ['as' => 'post.category', 'uses' => 'postController@posts_by_category']);
Route::get('/post/byalfabet', ['as' => 'post.alfabet', 'uses' => 'postController@posts_by_alfabet']);
Route::get('/post/search', ['as' => 'post.search', 'uses' => 'ApostController@search_post']);
Route::get('/post/download', ['as' => 'post.download', 'uses' => 'postController@download_post']);

/**
 * category controller routes
 */


/**
 * comment controller routes
 */
Route::post('/comment/add', ['as' => 'comment.add', 'uses' => 'CommentController@add_comment']);
// route::post('/article/{article}/comment',
Route::get('/comment/edit', ['as' => 'comment.edit', 'uses' => 'CommentController@edit_comment']);
Route::get('/comment/edit', ['as' => 'comment.edit', 'uses' => 'CommentController@delete_comment']);

/**
 * user controller routes
 */
Route::get('/user/index', ['as' => 'user.index', 'uses' => 'UserController@index']);
Route::get('/user/{user}', ['as' => 'user.editprofile', 'uses' => 'UserController@edit_profile']);
Route::post('/user', ['as' => 'user.updateprofile', 'uses' => 'UserController@update_profile']);
Route::get('/user/factors', ['as' => 'user.factors', 'uses' => 'UserController@factors']);
Route::get('/user/{factor}', ['as' => 'user.factor', 'uses' => 'UserController@factor']);
Route::get('/user/factors', ['as' => 'user.factors', 'uses' => 'UserController@factors']);
Route::get('/user/usersbookarticle', ['as' => 'user.bookarticle', 'uses' => 'UserController@users_book_article']);
Route::get('/user/{comments}', ['as' => 'user.comments', 'uses' => 'UserController@comments']);
Route::get('/user/{messages}', ['as' => 'user.messages', 'uses' => 'UserController@messages']);
Route::get('/user/sendmessage', ['as' => 'user.sendmessage', 'uses' => 'UserController@send_message']);