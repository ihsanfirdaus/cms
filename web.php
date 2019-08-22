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
Route::get('/', function(){
    return view('welcome');
});
// Route Frontend
Route::group(['prefix'=>'/'], function(){
    Route::get('/','FrontendController@index');
    Route::get('blog','FrontendController@blog');
    Route::get('about','FrontendController@about');
    Route::get('blog/{artikel}','FrontendController@singleblog');
    Route::get('blog-tag/{tag}','FrontendController@blogtag');
    Route::get('blog-kategori/{kategori}','FrontendController@blogkategori');
});
// Route Backend
Route::group(['prefix'=>'admin','middleware'=>'auth'],
function (){
    Route::get('/', function(){
        return view('backend.index');
    });
    Route::resource('kategori', 'KategoriController');
    Route::resource('tag', 'TagController');
    Route::resource('artikel', 'ArtikelController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
