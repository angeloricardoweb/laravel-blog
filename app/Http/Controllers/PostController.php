<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($post)
    {
        $post = Post::where('slug', $post)->firstOrFail(); //retorna 404 se falhar
        return view('pages.posts.post', compact('post'));
    }
}
