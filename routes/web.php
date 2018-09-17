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

Route::get('/', 'PagesController@index');

// Route::get('/hello', function () {
//     return "Hello World";
// });

Route::get('/about','PagesController@about');

Route::get('/posts','PagesController@posts');

// Route::get('/users/{id}/{name}',function($id,$name){
//     return "this is $name with id=$id";
// });

Route::resource('posts','PostsController');