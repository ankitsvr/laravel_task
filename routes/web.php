<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'main page';
});

Route::get('/dynmo', function(){
    return "this is dynamic page";
})->name('change');

Route::get('/refer', function(){
    return redirect()->route('change');
});
