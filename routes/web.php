<?php

use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return redirect('/');
})->name('login');

Route::get('register', function () {
    return view('forms.register');
});

Route::get('changePassword', function () {
    return view('forms.changePassword');
});

Route::get('registerProvider', function () {
    return view('forms.registerProvider');
})->name('registerProvider');;

Route::get('addPoint', function () {
    return view('forms.addPoint');
})->name('addPoint');;

Route::get('addsuggestion', function () {
    return view('forms.addsuggestion');
})->name('addsuggestion');;

Route::get('dashboard', function () {
    return view('map.dashboard');
})->name('dashboard');

Route::get('points', [PointsController::class, 'show'])->name('points');

Route::get('users', function () {
    return view('admin.users');
})->name('users');;

Route::get('suggestion', function () {
    return view('admin.suggestion');
})->name('suggestion');;


Route::post('api/users', [UsersController::class, 'store'])->name('users');

Route::post('api/user', [UsersController::class, 'login'])->name('user');

Route::get('api/user', [UsersController::class, 'getUsers'])->name('user');

Route::post('api/providers', [ProvidersController::class, 'store'])->name('providers');

Route::get('api/user/updateRol/{id}', [UsersController::class, 'updateRol'])->name('updateRol');

Route::post('logout', [UsersController::class, 'logout'])->name('logout');

Route::post('api/point', [PointsController::class, 'store'])->name('point');

Route::get('api/point/{id}', [PointsController::class, 'getPoints'])->name('point');

Route::get('api/user/{id}', [UsersController::class, 'getUser'])->name('user');

Route::get('api/providers/{id}', [ProvidersController::class, 'getProvider'])->name('user');