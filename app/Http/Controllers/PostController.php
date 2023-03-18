<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($post)
    {
        return view('pages.post', compact('post'));
    }
}
