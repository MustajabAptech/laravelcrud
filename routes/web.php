<?php

use App\Http\Controllers\student;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/user', [UserController::class, 'getuserRecord']);
Route::get('/', [ProductController::class, 'getProducts']);

/* Route::get('/', function () {
    return view('app');
}); */
Route::get('/cv', function () {
    return view('Cv');
});
Route::get('/card', function () {
    return view('/card');
});

Route::get('form', [student::class, 'create']);

Route::post('save', [student::class, 'savedata']);

Route::get('show', [student::class, 'show']);

Route::get('edit/{Id}', [student::class, 'edit']);

Route::post('update/{Id}', [student::class, 'update']);

Route::get('delete/{Id}', [student::class, 'delete']);

