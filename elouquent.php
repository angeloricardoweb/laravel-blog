

<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all(); //retorna todos os posts
        $posts = Post::where('ativo', true)->get(); //retorna todos os posts ativos
        $posts = Post::paginate(5); //retorna todos os posts com paginação
        $posts = Post::where('ativo', true)->paginate(5); //retorna todos os posts ativos com paginação (paginação pode ser executada apenas em querys)
        $post = Post::where('slug', $post)->firstOrFail(); //retorna 404 se falhar
    }
}
