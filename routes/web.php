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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dash', function () {
    return view('admin.dashboard');
})->name('dashboard');

/*
Route::get('/admin/post/new', function () {
    return view('admin.post.new');
})->name('new.post');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except'=>['show','create','store']])->middleware('can:manage-users');
    Route::resource('/post', 'PostController')->middleware('can:manage-posts');
    Route::resource('/tag', 'TagController')->middleware('can:manage-tags');
    Route::resource('/category', 'CategoryController')->middleware('can:manage-categories');

});
