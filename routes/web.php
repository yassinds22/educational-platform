<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('clients.landing');
})->name('landing');

Route::get('/courses', function () {
    return view('clients.courses.index');
})->name('courses.index');

Route::get('/courses/demo', function () {
    return view('clients.courses.show');
})->name('courses.show');

Route::get('/categories', function () {
    return view('clients.categories');
})->name('categories');


Route::get('/instructor', function () {
    return view('clients.instructor');
})->name('instructor');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', function () {
        return view('clients.student.dashboard');
    })->name('dashboard');

    Route::get('/player', function () {
        return view('clients.student.player');
    })->name('player');
});
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('/courses', function () {
        return view('admin.courses');
    })->name('courses');

    Route::get('/categories', function () {
        return view('admin.categories');
    })->name('categories');
});
