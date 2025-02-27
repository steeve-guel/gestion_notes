<?php

use App\Http\Controllers\CoursController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\UniteEnsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormationController::class, 'index']);

Route::get('/login',function(){
    return view('auth.login');
});

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
    Route::patch('/{formation}/editFormation', 'update');
});

Route::prefix('/unite_ens')->controller(UniteEnsController::class)->group(function () {

    Route::get('/', 'index')->name('admin.uniteEns.uniteEns');

    //route--niveaux
    Route::get('/newUniteEns', 'create')->name('create');

    Route::post('/newUniteEns', 'store');

    Route::get('/{unite_ens}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('unite_ens.show');

    Route::get('/{unite_ens}/editUniteEns', 'edit')->name('editUniteEns');
    Route::patch('/{unite_ens}/editUniteEns', 'update');
});

Route::prefix('/cours')->controller(CoursController::class)->group(function () {

    //route--niveaux
    Route::get('/newCours', 'create')->name('create');

    Route::post('/newCours', 'store');

    Route::get('/{cours}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('cours.show');

    // Route::get('/{unite_ens}/editUniteEns', 'edit')->name('editUniteEns');
    // Route::patch('/{unite_ens}/editUniteEns','update');
});

Route::prefix('/etudiants')->controller(EtudiantController::class)->group(function () {

    //route--niveaux
    Route::get('/newEtudiant', 'create')->name('create');

    Route::post('/newEtudiant', 'store');

    Route::get('/{etudiant}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('etudiant.show');

    Route::get('/{etudiant}/editEtudiant', 'edit')->name('editEtudiant');
    Route::patch('/{etudiant}/editEtudiant', 'update');
});

Route::prefix('/enseignants')->controller(EnseignantController::class)->group(function () {

    Route::get('/', 'index')->name('admin.enseignant.enseignants');

    //route--niveaux
    Route::get('/newEnseignant', 'create')->name('create');

    Route::post('/newEnseignant', 'store');

    Route::get('/{enseignant}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('enseignant.show');

    Route::get('/{enseignant}/editEnseignant', 'edit')->name('editEnseignant');
    Route::patch('/{enseignant}/editEnseignant', 'update');
});

//php artisan migrate:fresh


//php artisan make:model Formation -m
//php artisan make:controller FormationController --resource --model=Formation
//php artisan make:request FormationFilterRequest

//php artisan make:model Niveau -m
//php artisan make:controller NiveauController --resource --model=Niveau
//php artisan make:request NiveauFilterRequest

//php artisan make:model UniteEns -m
//php artisan make:controller UniteEnsController --resource --model=Niveau

//php artisan make:model Cours -m
//php artisan make:controller CoursController --resource --model=Cours
//php artisan make:request CoursFilterRequest


//php artisan make:model Etudiant -m
//php artisan make:controller EtudiantController --resource --model=Etudiant
//php artisan make:request EtudiantFilterRequest

//php artisan make:model Enseignant -m
//php artisan make:controller EnseignantController --resource --model=Enseignant
//php artisan make:request EnseignantFilterRequest
