<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "Index"])->name('home');

Route::get('/register', [UserController::class, "register"]);
Route::post('/register', [UserController::class, "insert"]);
Route::get('/login', [UserController::class, "login"])->name('login');
Route::post('/login', [UserController::class, "handleLogin"]);
Route::get('/logout', [UserController::class, "logout"])->name('logout');

Route::prefix('product')->group(function () {
    Route::get('/create', [HomeController::class, "createProduct"])->name('create');
    Route::post('/create', [HomeController::class, "handleCreateProduct"]);

    Route::get('/update/{id}', [HomeController::class, "updateProduct"])->name('update');
    Route::post('/update/{id}', [HomeController::class, "handleUpdateProduct"]);

    Route::get('/delete/{id}', [HomeController::class, "deleteProduct"])->name('delete');


});


