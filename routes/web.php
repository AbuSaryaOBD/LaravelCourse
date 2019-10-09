<?php

use App\Country;
use App\Photo;
use App\Post;
use App\User;

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

// Route::get('delete',function(){
//     $affected=DB::delete('DELETE from posts where id=?',[1]);
//     return $affected;
// });

// Route::get('/basicInsert',function(){
//     $post = new Post;
//     $post->title = 'New Eloquent title';
//     $post->content = 'Wow Eloquent title';
//     $post->save();
// });

// Route::get('/create',function(){
//     Post::create(['title'=>'the create method','content'=>'Wow I am learning PHP']);
// });




// Route::get('/read',function(){
//     $posts=Post::all();
//     foreach ($posts as $post) {
//         return $post->title;
//     }
// });

// Route::get('/find',function(){
//     $post=Post::find(2);
//     return $post;
// });



// Route::get('/findwhere',function(){
//     $posts=Post::where('id',3)->orderBy('id','desc')->take(1)->get();
//     return $posts;
// });
// Route::get('/findmore',function(){
//     // $posts=Post::findOrFail(1);
//     // return $posts;

//     $posts=Post::where('users_count','<',50)->firstOrFail();
    
// });

// Route::get('/update',function(){
//     Post::where('id',2)->where('is_admin',0)->update(['title'=>'New PHP','content'=>'I love Ha Ha Ha']);
// });

// Route::get('/delete',function(){
//     $post=Post::find(2);
//     $post->delete();
// });
// Route::get('/delete',function(){
//     Post::destroy(3);
// });

// Route::get('/delete',function(){
//     Post::destroy([12,13]);
//     // Post::where('is_admin',0)->delete();
//

// Route::get('softdelete',function(){
//     Post::find(14)->delete();
// });

// Route::get('/readsoftdelete',function(){
//     // return Post::find(15);
//     // $post = Post::withTrashed()->where('id',15)->get();
//     // return $post;
//     $post = Post::onlyTrashed()->get();
//     return $post;
// });


// Route::get('/restore',function(){
//     Post::withTrashed()->where('is_admin',0)->restore();
// });


// Route::get('/forcedelete',function(){
//     Post::withTrashed()->where('is_admin',0)->forcedelete(); 
// });




//*******************************************//
//-------------------------------------------//
//______________ ReleationShip ______________//


/////////////// One To One : 
// Route::get('/user/{id}/post',function($id){
//     return User::find($id)->post;
// });

// Route::get('/post/{id}/user',function($id){
//     return Post::find($id)->user;
// });

/////////////// One To Many :
// Route::get('/posts',function(){
//     $user = User::find(1);
//     foreach ($user->posts as $post) {
//         echo $post->title . '</br>';
//     }
// });

/////////////// Many To Many :
// Route::get('/user/{id}/role',function($id){
//     $user = User::find($id)->roles()->orderBy('id','desc')->get();
//     return $user;
//     // foreach ($user->roles as $role) {
//     //     return $role->name;
//     // }
// });


/////////////// Accessing pivot table :
// Route::get('/user/pivot',function(){
//     $user = User::find(1);

//     foreach ($user->roles as $role) {
//         echo $role->pivot->created_at;
//     }
// });


// Route::get('/user/country',function(){
//     $country = Country::find(1);
//     echo '<ul>';
//     foreach ($country->posts as $post) {
//         echo '<li>' . $post->title . '</li>';
//     }
//     echo '</ul>';
// });


/////////////// Ploymorphic Realtions :
// Route::get('/photo/{id}/owner',function($id){
//     $photo = Photo::find($id);
//     return $photo->imageable;
// });






//______________ ReleationShip ______________//
//-------------------------------------------//
//*******************************************//