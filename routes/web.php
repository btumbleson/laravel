<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {



    return view('welcome');
});


Route::get('/url', function () {


    $contents = Storage::disk('public2')->url('image.jpg');

    dd($contents);
});

Route::get('/size', function () {


    $contents = Storage::disk('public2')->size('image.jpg');

    dd($contents);
});