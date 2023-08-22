<?php

use App\Events\UserRegistered;
use App\Jobs\SendMail;
use App\Mail\PostPublished;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * CRUD Routes
 */

Route::group(['middleware' => 'auth'], function(){
    Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
    Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
    Route::get('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force-delete');


    Route::resource('posts', PostController::class);

    Route::get('user-data', function(){
    return Auth::user();
    // return auth()->user();
    });

});

Route::get('send-mail', function(){
    SendMail::dispatch();
    dd("Mail has been sent!");
});

Route::get('user-registered', function(){

    $email = 'juniorngu84@gmail.com';
    event(new UserRegistered($email));

    dd("Mail Sent");
});

//en, fr
Route::get('greeting/{locale}', function($locale){

    App::setLocale($locale);
    return view('greeting');
})->name('greeting');
