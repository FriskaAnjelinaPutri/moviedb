<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'homepage']);
Route::get('movie/{id}/{slug}', [MovieController::class, 'detailmovie']);

Route::get('create-movie', [MovieController::class, 'create'])->name('createMovie');
Route::post('/movie', [MovieController::class, 'store'])->name('storeMovie');
