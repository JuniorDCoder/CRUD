<?php

use App\Mail\OrderShipped;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["middleware" => "authCheck"], function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});



Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
Route::get('posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
Route::delete('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

Route::resource('posts', PostController::class);

Route::get('unavailable', function(){
    return view('unavailable');
})->name('unavailable');

Route::get('contact', function(){
    $posts = Post::all();
    return view('contact', compact('posts'));
});

Route::get('send-mail', function(){
    /**
     * Mail::raw('Hello From Elife Saver', function($message){
        $message->to('juniorngu84@gmail.com')->subject('Test Mail');
        });
     */
    Mail::send(new OrderShipped);
    dd('success');
});
