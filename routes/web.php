<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/monumentsPage', function () {
    return view('pages.monumentsPage');
})->name('monumentsPage');

Route::get('/newsPage', function () {
    return view('pages.newsPage');
})->name('newsPage');

Route::get('/appsPage', function () {
    return view('pages.appsPage');
})->name('appsPage');