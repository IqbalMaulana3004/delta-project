<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('delta-group');
});

Route::get('/delta-barito', function() {
    return view('delta-barito');
});

Route::get('/delta-borneo', function() {
    return view('delta-borneo');
});

Route::get('/delta-marine', function() {
    return view('delta-marine');
});
