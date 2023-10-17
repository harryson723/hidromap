<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('register', function () {
    return view('forms.register');
});

Route::get('changePassword', function () {
    return view('forms.changePassword');
});

Route::get('registerProvider', function () {
    return view('forms.registerProvider');
});

Route::get('addPoint', function () {
    return view('forms.addPoint');
});

Route::get('addsuggestion', function () {
    return view('forms.addsuggestion');
});

Route::get('dashboard', function () {
    return view('map.dashboard');
});

Route::get('points', function () {
    return view('admin.points');
});

Route::get('users', function () {
    return view('admin.users');
});

Route::get('suggestion', function () {
    return view('admin.suggestion');
});