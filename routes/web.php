<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['throttle:global'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

});


