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
Route::get('/book/index', ['as' => 'book.index', 'uses' => 'BookController@index']);
Route::get('/book/add', ['as' => 'book.add', 'uses' => 'BookController@add_book']);
Route::get('/book/edit', ['as' => 'book.edit', 'uses' => 'BookController@edit_book']);
Route::post('/book/store', ['as' => 'book.store', 'uses' => 'BookController@edit_book']);
Route::get('/book/delete', ['as' => 'book.delete', 'uses' => 'BookController@delete_book']);
Route::get('/book/search', ['as' => 'book.search', 'uses' => 'BookController@search_book']);
Route::get('/book/reserve', ['as' => 'book.reserve', 'uses' => 'BookController@reserve_book']);
