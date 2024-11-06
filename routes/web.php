<?php

use Illuminate\Support\Facades\Route;


Route::get('/categorias', function () {
    return view('front.categorias');
});


Route::get('/single', function () {
    return view('front.single');
});


Route::get('/', function () {
    return view('front.home');
});
