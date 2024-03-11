<?php

use Illuminate\Support\Facades\Route;

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

//Disable Jetstream login and register routes.
Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::match(['get', 'post'], 'login', function () {
        abort(404);
    });
    Route::match(['get', 'post'], 'register', function () {
        abort(404);
    });
});

Route::get('/', function () {
    return redirect('/admin');
});
