<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


Route::get('home', [App\http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'admin']], function () {
});
Route::get('reservation', [App\http\Controllers\RservationController::class, 'store'])->name('reservation');
Route::get('admin', [App\http\Controllers\RservationController::class, 'index'])->name('admin');
Route::get('admin/{id}', [App\http\Controllers\RservationController::class, 'destroy'])->name('destroy');

});
Route::get('/dashboard', [App\http\Controllers\SalleController::class, 'index']);




 Route::get('/enregistrement', function () {
        return view('enregistrement');
    })->name('enregistrement');






