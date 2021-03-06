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
Route::view('/services/webdesign', 'pages.services.webdesign')->name('services.webdesign');
Route::view('/services/webapp', 'pages.services.webapp')->name('services.webapp');
Route::view('/services/photography', 'pages.services.photography')->name('services.photography');

Route::post('/blog/image_upload', [PostsController::class, 'image_upload'])->name('blog.image_upload');
Route::get('/blog/category/{post_categories:category_slug}', [PostsController::class, 'category'])->name('blog.category');

Route::resource('/blog', PostsController::class)
    ->parameters(['blog' => 'slug']);

Route::post('/send', [SendEmailController::class, 'send'])->name('send.email');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
