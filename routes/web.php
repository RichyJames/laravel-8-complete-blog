<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeaturedProductController; 



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('send-message');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/featured', [FeaturedProductController::class, 'index'])->name('featured');
Route::get('/featured/{id}', [FeaturedProductController::class, 'show'])->name('show');
Route::get('/featured/{id}/edit', [FeaturedProductController::class, 'edit'])->name('featured.edit');
Route::put('/featured/{id}', [FeaturedProductController::class, 'update'])->name('featured.update');
Route::delete('/featured/{id}', [FeaturedProductController::class, 'destroy'])->name('featured.destroy');

