<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/monumentsPage', function () {
    return view('monumentsPage');
})->name('monumentsPage');

Route::get('/newsPage', function () {
    return view('newsPage');
})->name('newsPage');

Route::get('/appsPage', function () {
    return view('appsPage');
})->name('appsPage');