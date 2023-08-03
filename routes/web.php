<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadController;

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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/threads', [HomeController::class, 'index'])->name('threads.index');
});

Route::get('/threads', [ThreadController::class, 'index'])->name('threads.index');

Route::get('/threads/post', [ThreadController::class, 'create'])->name('threads.post');
Route::post('/threads', [ThreadController::class, 'store'])->name('threads.store');