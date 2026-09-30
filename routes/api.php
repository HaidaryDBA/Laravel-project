<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
use App\Http\Controllers\TeacherController;

    Route::apiResource('authors', AuthorController::class);
    Route::apiResource("books",BookController::class);

