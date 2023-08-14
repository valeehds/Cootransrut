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

Route::get('/', function () {
<<<<<<< HEAD
    return view('auth.login');
=======
    return view('welcome');
>>>>>>> 6b377442d9b19f9de3cdd7eb312326495f7ee2ed
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD

=======
>>>>>>> 6b377442d9b19f9de3cdd7eb312326495f7ee2ed
