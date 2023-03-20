<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('posts')->insert([
        //     'titulo' => 'Post 1',
        //     'slug' => 'post-1',
        //     'thumb' => 'post-1.png',
        //     'descricao' => 'Descrição do post 1',
        //     'body' => 'body do post 1',
        //     'ativo' => true,
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);

        Post::factory()->count(10)->create(); //cria 10 posts
        Post::factory()->count(10)->active()->create(); //cria 10 posts ativos
    }
}
