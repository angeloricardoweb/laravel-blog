<?php

use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth', 'verified'])
->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/posts', [PostsController::class, 'index'])->name('admin.posts.index');
    Route::get('/admin/posts/create', [PostsController::class, 'create'])->name('admin.posts.create');
    Route::POST('/admin/posts/store', [PostsController::class, 'store'])->name('admin.posts.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );
});

require __DIR__ . '/auth.php';
