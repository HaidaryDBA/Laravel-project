<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

    Route::apiResource('authors', AuthorController::class);
    Route::apiResource("books",BookController::class);
    Route::apiResource("categories",CategoryController::class);
