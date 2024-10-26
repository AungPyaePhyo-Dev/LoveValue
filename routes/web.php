<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\PhotoController;
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

Route::get('live', [LiveController::class, 'index'])->name('live');
Route::get('video', [VideoController::class, 'index'])->name('video');
Route::get('photo', [PhotoController::class, 'index'])->name('photo');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
