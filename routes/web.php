<?php

Route::get('/', function () {
    return view('home');
 });
Route::get('/register', function () {
    return view('register');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/help', function () {
    return view('help');
});

