<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\UniteEnsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormationController::class,'index']);

Route::prefix('/formations')->controller(FormationController::class)->group(function () {
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
});

Route::prefix('/unite_ens')->controller(UniteEnsController::class)->group(function () {

    //route--niveaux
    Route::get('/newUniteEns', 'create')->name('create');

    Route::post('/newUniteEns', 'store');

    Route::get('/{unite_ens}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('unite_ens.show');

    Route::get('/{unite_ens}/editUniteEns', 'edit')->name('editUniteEns');
    Route::patch('/{unite_ens}/editUniteEns','update');
});

//php artisan make:model Formation -m
//php artisan make:controller FormationController --resource --model=Formation
//php artisan make:request FormationFilterRequest

//php artisan make:model Niveau -m
//php artisan make:controller NiveauController --resource --model=Niveau
//php artisan make:request NiveauFilterRequest

//php artisan make:model UniteEns -m
//php artisan make:controller UniteEnsController --resource --model=Niveau

//php artisan make:model ElmtConstUniteEns -m
//php artisan make:controller ElmtConstUniteEnsController --resource --model=ElmtConstUniteEns

