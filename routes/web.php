<?php

use App\Http\Controllers\CompressorController;
use App\Http\Controllers\DryerController;
use App\Http\Controllers\NitrogenController;
use App\Http\Controllers\TangkiController;
use App\Http\Controllers\TimelineController;
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
Route::group(['middleware' => ['auth']], function () {
    Route::view('/', 'dashboard')->name('dashboard');

    Route::get('timeline', [TimelineController::class, 'index'])->name('timeline');

    Route::resource('compressor', CompressorController::class);
    Route::resource('dryer', DryerController::class);
    Route::resource('nitrogen', NitrogenController::class);
    Route::resource('tangki', TangkiController::class);
});

require __DIR__.'/auth.php';
