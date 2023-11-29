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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/inmail', function () {
    return view('/in_mail/index');
});

Route::get('/inmail/add', function () {
    return view('/in_mail/create');
});

Route::get('/outmail', function () {
    return view('/out_mail/index');
});

Route::get('/outmail/add', function () {
    return view('/out_mail/create');
});

Route::get('/contract', function () {
    return view('/contract/index');
});

Route::get('/contract/add', function () {
    return view('/contract/create');
});

Route::get('/issue', function () {
    return view('/issue/index');
});

Route::get('/issue/add', function () {
    return view('/issue/create');
});