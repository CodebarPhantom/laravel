<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug){

        //$post = \DB::table('posts')->where('slug', $slug)->first();
        //dd($post);
        /* $posts = [
            'my-first-post' =>'Hello is my first post',
            'my-second-post'=>'this is my second post'
        ]; */
    
        /* if(!array_key_exists($posting, $posts)){
            abort(404, 'Sorry that post was not found');
        } */
        //$post = DB::table('posts')->where('slug', $slug)->first();
        /* if(!$post){
            abort(404);
        } */
        //$post = Post::where('slug', $slug)->firstorFail();    
        return view('post', [
            'posting'=>Post::where('slug', $slug)->firstorFail()    
        ]);
    }
}
