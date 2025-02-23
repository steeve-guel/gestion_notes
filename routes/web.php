<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.createFormation');
});

Route::prefix('/admin')->controller(FormationController::class)->group(function () {
    Route::get('/', 'index')->name('admin.dashboardAdmin');

    //route--formation
    Route::get('/newFormation', 'create')->name('create');

    Route::post('/newFormation', 'store');

    Route::get('/{formation}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('formation.show');

    Route::get('/{formation}/editFormation', 'edit')->name('editFormation');
    Route::patch('/{formation}/editFormation','update');

    //route--niveau
});

//php artisan make:model Formation -m
//php artisan make:controller FormationController --resource --model=Formation
//php artisan make:request FormationFilterRequest

//php artisan make:model Niveau -m
//php
