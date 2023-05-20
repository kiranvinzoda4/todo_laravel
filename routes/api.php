<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;


Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});

Route::controller(TodoController::class)->group(function () {
    Route::get('/get_all_todos', 'index');
    Route::get('/todos_paging', 'index_paging');
    Route::get('/todo_by_user_id/{user_id}', 'todo_by_user_id');
    Route::post('/add_todo', 'store');
    Route::get('/show_todo/{id}', 'show');
    Route::put('/update_todo/{id}', 'update');
    Route::delete('/delete_todo/{id}', 'destroy');
}); 


Route::controller(UserController::class)->group(function () {
    Route::get('/get_all_users', 'profiles');
});


// always keep this code in last for URL validation   
Route::any('{any}', function(){
    return response()->json([
        'status'    => 'error',
        'message'   => 'URL Not Found.',
    ], 404);
})->where('any', '.*');