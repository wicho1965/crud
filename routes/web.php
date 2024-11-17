<?php

use Illuminate\Support\Facades\Route;

Route::get('/registro', function () {
    return view('user.registro');
})->name('registro');

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');

Route::get('/categorias', function () {
    return view('front.categorias');
})->name('categorias');

Route::get('/single', function () {
    return view('front.single');
})->name('single');

Route::get('/', function () {
    return view('front.home');
})->name('home');
