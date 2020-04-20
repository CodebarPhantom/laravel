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

//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('test', function(){  
    return view('test', [
        'name' => request('name')
    ]);
});*/

/*Route::get('/posts/{posting}', function($posting){
    $posts = [
        'my-first-post' =>'Hello is my first post',
        'my-second-post'=>'this is my second post'
    ];

    if(!array_key_exists($posting, $posts)){
        abort(404, 'Sorry that post was not found');
    }

    return view('post', [
        'posting'=>$posts[$posting]
    ]);
});*/

Route::get('/posts/{post}', 'PostsController@show');

