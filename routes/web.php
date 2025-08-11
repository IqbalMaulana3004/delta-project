<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('delta-group');
});

Route::get('/delta-barito', function() {
    return view('delta-barito');
});

Route::get('/delta-indo', function() {
    return view('delta-indo');
});

Route::get('/delta-marine', function() {
    return view('delta-marine');
});
