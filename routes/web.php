<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.createFormation');
});

//php artisan make:model Formation -m
//php artisan make:controller FormationController --resource --model=Formation
//php artisan make:request FormationFilterRequest
