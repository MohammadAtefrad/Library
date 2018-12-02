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
Route::get('/book/onebook', ['as' => 'book.onebook', 'uses' => 'BookController@one_book']);
Route::get('/book/bycategory', ['as' => 'book.category', 'uses' => 'BookController@books_by_category']);
Route::get('/book/byalfabet', ['as' => 'book.alfabet', 'uses' => 'BookController@books_by_alfabet']);
Route::get('/book/add', ['as' => 'book.add', 'uses' => 'BookController@add_book']);
Route::get('/book/edit', ['as' => 'book.edit', 'uses' => 'BookController@edit_book']);
Route::post('/book/store', ['as' => 'book.store', 'uses' => 'BookController@edit_book']);
Route::get('/book/delete', ['as' => 'book.delete', 'uses' => 'BookController@delete_book']);
Route::get('/book/search', ['as' => 'book.search', 'uses' => 'BookController@search_book']);
Route::get('/book/reserve', ['as' => 'book.reserve', 'uses' => 'BookController@reserve_book']);

/**
 * article controller routes
 */
Route::get('/article/allarticles', ['as' => 'article.allarticles', 'uses' => 'ArticleController@all_articles']);
Route::get('/article/onearticle', ['as' => 'article.onearticle', 'uses' => 'ArticleController@one_article']);
Route::get('/article/bycategory', ['as' => 'article.category', 'uses' => 'ArticleController@articles_by_category']);
Route::get('/article/byalfabet', ['as' => 'article.alfabet', 'uses' => 'ArticleController@articles_by_alfabet']);
Route::get('/article/addarticle', ['as' => 'article.add', 'uses' => 'ArticleController@add_article']);
// Route::middleware('auth')->get('/article/create', 'ArticleController@create');
Route::post('/article', ['as' => 'article.storearticle', 'uses' =>'ArticleController@store_article']);
Route::get('/article/edit', ['as' => 'article.edit', 'uses' => 'ArticleController@edit_article']);
// Route::get('/article/{article}/edit' , 'ArticleController@edit')->name('article.edit');
Route::post('/article/update', ['as' => 'article.update', 'uses' => 'ArticleController@update_article']);
// Route::patch('/article/{article}' ,'ArticleController@update')->name('article.update');

Route::post('/article/store', ['as' => 'article.store', 'uses' => 'ArticleController@edit_article']);
Route::get('/article/delete', ['as' => 'article.delete', 'uses' => 'ArticleController@delete_article']);
Route::get('/article/search', ['as' => 'article.search', 'uses' => 'AarticleController@search_article']);
Route::get('/article/download', ['as' => 'article.download', 'uses' => 'ArticleController@download_article']);

/**
 * category controller routes
 */
Route::get('/category/addbookcategory', ['as' => 'category.addbookcategory', 'uses' => 'CategoryController@add_book_category']);
Route::get('/category/addpostcategory', ['as' => 'category.addbpostcategory', 'uses' => 'CategoryController@add_post_category']);
Route::get('/category/addarticlecategory', ['as' => 'category.addarticlecategory', 'uses' => 'CategoryController@add_article_category']);



Route::get('/category/editbookcategory', ['as' => 'category.editbookcategory', 'uses' => 'CategoryController@edit_book_category']);
Route::get('/category/editpostcategory', ['as' => 'category.editpostcategory', 'uses' => 'CategoryController@edit_post_category']);
Route::get('/category/editarticlecategory', ['as' => 'category.editarticlecategory', 'uses' => 'CategoryController@edit_article_category']);
Route::get('/category/delete', ['as' => 'category.delete', 'uses' => 'CategoryController@delete_category']);

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