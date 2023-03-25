<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    //

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        // Active Record Method -> não precisa adicionar o fillable no model
        // $post = new Post();
        // $post->titulo = $request->titulo;
        // $post->slug = Str::slug($request->titulo);
        // $post->descricao = $request->descricao;
        // $post->body = $request->body;
        // $post->ativo = $request->ativo;
        // $post->save(); //

        // Mass Assignment Method -> precisa adicionar o fillable no model
        // Post::create([
        //     'titulo' => $request->titulo,
        //     'slug' => Str::slug($request->titulo),
        //     'descricao' => $request->descricao,
        //     'body' => $request->body,
        //     'ativo' => $request->ativo,
        // ]);

        $data = $request->all();
        // preciso tratar o slug pois ele não possui um mutator ou valor default
        $data['slug'] = Str::slug($request->titulo);
        Post::create($data); // precisa adicionar o fillable no model

        return redirect()->route('admin.posts.index', [
            'msg' => 'Post criado com sucesso!',
        ]);
    }
}
