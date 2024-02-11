<?php

use App\User;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {

//    $post = Post::first();

//    $user = User::first();

//    $post = Post::find(5);
//    $post->title = 'new Title';
//    $post->delete();

//    dd($user -> posts()->pluck('title')->all());
//    dd($user->posts()->where('status', 33)->get());
//    return view('welcome', [
//        'users' => DB::table('users')->simplePaginate(2)
//    ]);
});

Route::get('/test', [\App\Http\Controllers\Controller::class, 'test']);


Route::get('/login', [\App\Http\Controllers\Controller::class, 'login'])->name('login');

Route::middleware(['admin'])->group(function () {
    Route::POST('/getid', [\App\Http\Controllers\Controller::class, 'getid']);
});
