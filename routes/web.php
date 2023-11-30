<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
});

Route::group(['middleware' => 'auth.check'], function () {
    Route::get('/dashboard', function () {
        return view('/mail/index');
    });

    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/mail/add', function () {
        return view('/mail/create');
    });
});