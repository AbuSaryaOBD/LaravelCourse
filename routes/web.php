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

// Route::view('/','welcome');

// Route::get('/contact','PostController@contact');

// Route::get('post/{id}/{name}/{pass}','PostController@showPost');

// Route::view('about','about');

Route::get('/insert',function(){
    //DB::insert('insert into posts');
});


// Route::view('contact-us','contact')->name('con');
// Route::get('/post/{id}','PostController@index');
// Route::resource('posts','PostController');

// Route::get('/post/{id}/{name}',function($id,$name){
//     return "This is post number : ".$id." ".$name;
// });

// Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//     $url=route('admin.home');
//     return "The url is : ".$url;
// }));