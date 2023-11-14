<?php

use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\SuggestionsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// ****************** VISTAS ****************** //

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
})->name('registerProvider');

Route::get('addPoint', function () {
    return view('forms.addPoint');
})->name('addPoint');

Route::get('addsuggestion', function () {
    return view('forms.addsuggestion');
})->name('addsuggestion');

Route::get('dashboard', function () {
    return view('map.dashboard');
})->name('dashboard');

Route::get('points', [PointsController::class, 'show'])->name('points');

Route::get('users', function () {
    return view('admin.users');
})->name('usersAdmin');

Route::get('suggestion', function () {
    return view('admin.suggestion');
})->name('suggestion');

// ****************** API ****************** //

// USURIOS

Route::get('api/user', [UsersController::class, 'getUsers'])->name('user');

Route::get('api/user/{id}', [UsersController::class, 'getUser'])->name('userId');

Route::get('api/user/updateRol/{id}/{rol}', [UsersController::class, 'updateRol'])->name('updateRol');

Route::post('logout', [UsersController::class, 'logout'])->name('logout');

Route::post('api/user', [UsersController::class, 'login'])->name('user');

Route::post('api/users', [UsersController::class, 'store'])->name('users');


// PROVEEDORES

Route::get('api/providers', [ProvidersController::class, 'get'])->name('getProviders');

Route::get('api/providers/{id}', [ProvidersController::class, 'getProvider'])->name('providersId');

Route::post('api/providers', [ProvidersController::class, 'store'])->name('providers');

Route::post('api/providers/update', [ProvidersController::class, 'edit'])->name('editProviders');

Route::delete('api/providers/{id}', [ProvidersController::class, 'delete'])->name('providerDelete');

// PUNTOS

Route::get('api/points', [PointsController::class, 'get'])->name('getpoints');

Route::get('api/point/{id}', [PointsController::class, 'getPoints'])->name('pointId');

Route::post('api/point', [PointsController::class, 'store'])->name('point');

Route::post('api/point/{id}', [PointsController::class, 'edit'])->name('pointEdit');

Route::delete('api/point/{id}', [PointsController::class, 'delete'])->name('pointDelete');

// SUGERENCIAS

Route::get('api/suggestion', [SuggestionsController::class, 'get'])->name('getSuggestion');

Route::post('api/suggestion', [SuggestionsController::class, 'store'])->name('postSuggestion');



