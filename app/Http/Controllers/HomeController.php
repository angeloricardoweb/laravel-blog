<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = Post::where('ativo', true)->paginate(10);
        return view('pages.posts.index', compact('posts'));
    }
}
