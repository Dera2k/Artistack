<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtworkController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('artworks', ArtworkController::class);

require __DIR__.'/auth.php';

Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');
Route::get('/forgot-password', fn () => view('auth.forgot-password'))->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

Route::get('/verify-email', fn () => view('auth.verify-email'))
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/confirm-password', fn () => view('auth.confirm-password'))
    ->middleware('auth')
    ->name('password.confirm');