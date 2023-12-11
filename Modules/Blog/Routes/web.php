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

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\PostsController;

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@index');
});
Route::prefix('post')->group(function () {
    Route::get('/', 'PostsController@index');
    Route::post('/', 'PostsController@create')->name('addpost');
    Route::get('/', 'PostsController@show')->name('getpost');
    Route::get('/{slug}', 'PostsController@showDetail')->name('getslug');
});
