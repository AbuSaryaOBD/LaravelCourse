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



// Route::get('/insert',function(){
//     DB::insert('INSERT into posts(title,content) values(?,?)',['PHP with Laravel','PHP Laravel deserve to study']);
    
// });
// Route::get('/read',function(){
//     $results= DB::select('SELECT * from posts where id=?',[1]);
//     return $results;

//     foreach ($results as $post) {
//         return $post->title;
//     }

// });
// Route::get('/update',function(){
//     $affected=DB::update('UPDATE posts set title="Update Title" where id=?',[1]);
//     return $affected;
// });
Route::get('delete',function(){
    $affected=DB::delete('DELETE from posts where id=?',[1]);
    return $affected;
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