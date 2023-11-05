<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (session('islogged')) {
        return view('welcome');
    } else return redirect()->route('login');
});


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'create'])->name('user.create');
Route::post('/register', [UserController::class, 'store'])->name('user.store');

Route::post('/', [UserController::class, 'logged'])->name('login.store');

Route::get('/logout', [UserController::class, 'logout'])->name('login.logout');

