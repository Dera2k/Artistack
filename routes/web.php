<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\artworkController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return ('welcome');
});

// log in page route
ROute::get("/", [LoginController::class, 'index'])->name('login');

// home page route
Route::get("/home", [HomeController::class, 'index'])->name('home');

// artwork illustrations page route
Route::get("/artworks", [ArtworkController::class, 'index'])->name('artworks');
