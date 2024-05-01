<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        // $post = Post::find($postId); // no need this now
        return view('post', compact('post'));
    }
}
