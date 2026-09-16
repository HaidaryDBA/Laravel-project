<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello from our API',
        'team'    => 'Team Alpha',  // change to your team name
    ]);
});

Route::get('/greet/{name}', function ($name) {
    return response()->json([
        'greeting' => "Hello, $name!"
    ]);
});


route::get('/student', function(){
    return response() -> json([
        'greeting' => "hello world"
    ]);

});
Route::get('/hello', [TeacherController::class, 'hello']);
    
route:: get('/teacher/{name}', function($name){
    return response() -> json([
            "name" => "hello dear $name"
    ]);
});