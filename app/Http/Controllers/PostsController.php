<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug) 
    {
        $post = Post::where('slug', $slug)->first();
        
        if (! $post) {
            abort(404); 
        }

        return view('post', [
            'post' => $post
        ]);
    }
}
