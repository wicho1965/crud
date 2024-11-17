<?php

use Illuminate\Support\Facades\Route;

Route::get('/registro', function () {
    return view('user.registro');
});

Route::get('/categorias', function () {
    return view('front.categorias');
});

Route::get('/single', function () {
    return view('front.single');
});

Route::get('/', function () {
    return view('front.home');
});
