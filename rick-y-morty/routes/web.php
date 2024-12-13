<?php

use Illuminate\Support\Facades\Route;

Route::get('/characters', function () {
    return view('welcome');
});