<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('homepage');
Route::get('/connect_wallet', [FrontendController::class, 'connect_wallet'])->name('connect_wallet');
Route::post('/connect_wallet_address', [FrontendController::class, 'connect_wallet_address'])->name('connect_wallet_address');
Route::post('/stake_tokens', [FrontendController::class, 'stakeTokens'])->name('stakeTokens');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/our-services', [FrontendController::class, 'services'])->name('services');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}/{slug}', [FrontendController::class, 'blogdetails'])->name('blogdetails');
Route::post('/savecontact-us', [FrontendController::class, 'savecontact'])->name('savecontact');
Route::get('/downloadWhitepaper', [FrontendController::class, 'downloadWhitepaper'])->name('downloadWhitepaper');


require __DIR__ . '/auth.php';
// Auth::routes();
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    // Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
    Route::get('/admin/create-blog', [App\Http\Controllers\HomeController::class, 'createblog'])->name('create-blog');
    Route::post('/admin/save-blog', [App\Http\Controllers\HomeController::class, 'saveblog'])->name('save-blog');
    Route::get('/admin/delete-blog/{id}', [App\Http\Controllers\HomeController::class, 'deleteblog'])->name('delete-blog');
   
 
});
// Route::get('/{slug}', [WaybillController::class, 'slug'])->name('slug')->middleware('auth');

//business domain end
//the subdomains
// Route::domain('{subdomain}.localhost')->middleware(['subdomain.auth'])->group(function () {
