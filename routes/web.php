<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend.pages.index');
// });
Route::post('/subscribe', function () {
    $email=request('email');
    Newsletter::subscribe($email);
    return redirect()->back();
});
Route::get('/postCreate','PostController@create')->name('post.create');
Route::post('/postCreate','PostController@store')->name('post.store');
Route::get('/postShow','PostController@index')->name('post.index');
Route::get('/admin','AdminController@index')->name('post.index');
Route::get('/','FrontendController@index');
Route::get('/about','FrontendController@about')->name('about');
Route::get('/single/{id}','FrontendController@single')->name('post.single');
Route::get('/category/{id}','FrontendController@category')->name('post.category');
Route::post('/contactus','ContactController@store')->name('contact.store');
