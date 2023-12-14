<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::group(['middleware' => 'auth.check'], function () {
    Route::get('/dashboard', function () {
        return view('/mail/index');
    });

    Route::get('/mail/add', function () {
        return view('/mail/create');
    });

    Route::get('/profile', ProfileController::class);
    
    Route::get('mails/incoming', [MailController::class, 'incoming'])->name('mails.incoming');
    Route::get('mails/outgoing', [MailController::class, 'outgoing'])->name('mails.outgoing');
    Route::resource('mails', MailController::class);
});