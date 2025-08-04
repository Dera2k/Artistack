<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\artworkController;
// use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// artwork illustrations page route
Route::resource("artworks", ArtworkController::class);