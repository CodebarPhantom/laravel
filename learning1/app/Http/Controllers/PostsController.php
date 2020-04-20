<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug){
        /* $posts = [
            'my-first-post' =>'Hello is my first post',
            'my-second-post'=>'this is my second post'
        ]; */
    
        if(!array_key_exists($posting, $posts)){
            abort(404, 'Sorry that post was not found');
        }
    
        return view('post', [
            'posting'=>$posts[$posting]
        ]);
    }
}
