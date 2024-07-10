<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\CheckLoggedOutUser;
use App\Http\Middleware\CheckLoggedUser;
use App\Services\LoginService;
use App\Services\RegisterService;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::addRoute(['GET', 'POST'], '/login', [PublicController::class, 'login'])->name('login');

Route::middleware([CheckLoggedUser::class])->group(function () {
    Route::get('/home', [PublicController::class, 'home'])->name('home');

    Route::get('/logout', [LoginService::class, 'logout'])->name('logout');
});

Route::middleware([CheckLoggedOutUser::class])->group(function () {
    Route::get('/', [PublicController::class, 'index'])->name('index');

    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::addRoute(['GET', 'POST'], '/register', [RegisterService::class, 'register'])->name('register');
});
