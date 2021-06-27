<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::view('/', 'pages.home')->name('home');
Route::view('/staticblog', 'pages.staticblog')->name('static.blog');

Route::resource('/blog', PostsController::class)
    ->parameters(['blog' => 'slug']);

Route::post('/send', [SendEmailController::class, 'send'])->name('send.email');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
