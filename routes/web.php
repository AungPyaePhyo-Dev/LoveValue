<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VideoController;
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

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('live-service', [LiveController::class, 'show'])->name('live');
Route::get('video-service', [VideoController::class, 'show'])->name('video');
Route::get('photo-service', [PhotoController::class, 'show'])->name('photo');

Route::get('contact', [ContactController::class, 'show'])->name('contact');

// Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('edit/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::resource('service', ServiceController::class);
    Route::resource('live-service', LiveController::class);
    Route::resource('video-service', VideoController::class);
    Route::resource('photo-service', PhotoController::class);
    Route::resource('partner', PartnerController::class);
    Route::resource('link', LinkController::class);
    Route::resource('contact', ContactController::class);
});

require __DIR__.'/auth.php';
