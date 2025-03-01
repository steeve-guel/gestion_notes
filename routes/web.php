<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UniteEnsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect()->route('admin.dashboardAdmin');
});

Route::get('/login',[AuthController::class,'login'])->name('auth.login');
Route::delete('/logout',[AuthController::class,'logout'])->name('auth.logout');
Route::post('/login',[AuthController::class,'doLogin']);

Route::prefix('/formations')->controller(FormationController::class)->group(function () {
    Route::get('/', 'index')->name('admin.dashboardAdmin')->middleware('auth');

    //route--formation
    Route::get('/newFormation', 'create')->name('create')->middleware('auth');

    Route::post('/newFormation', 'store')->middleware('auth');

    Route::get('/{formation}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('formation.show')->middleware('auth');

    Route::get('/{formation}/editFormation', 'edit')->name('editFormation')->middleware('auth');
    Route::patch('/{formation}/editFormation', 'update')->middleware('auth');
});

Route::prefix('/unite_ens')->controller(UniteEnsController::class)->group(function () {

    Route::get('/', 'index')->name('admin.uniteEns.uniteEns')->middleware('auth');

    //route--niveaux
    Route::get('/newUniteEns', 'create')->name('create')->middleware('auth');

    Route::post('/newUniteEns', 'store')->middleware('auth');

    Route::get('/{unite_ens}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('unite_ens.show')->middleware('auth');

    Route::get('/{unite_ens}/editUniteEns', 'edit')->name('editUniteEns')->middleware('auth');
    Route::patch('/{unite_ens}/editUniteEns', 'update')->middleware('auth');
});

Route::prefix('/cours')->controller(CoursController::class)->group(function () {

    Route::get('/', 'index')->name('admin.cours.cours')->middleware('auth');

    //route--niveaux
    Route::get('/newCours', 'create')->name('create')->middleware('auth');

    Route::post('/newCours', 'store')->middleware('auth');

    Route::get('/{cours}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('cours.show')->middleware('auth');

    Route::get('/{cours}/editCours', 'edit')->name('editCours')->middleware('auth');
    Route::patch('/{cours}/editCours','update')->middleware('auth');
});

Route::prefix('/etudiants')->controller(EtudiantController::class)->group(function () {

    Route::get('/', 'index')->name('admin.etudiant.etudiants')->middleware('auth');

    //route--niveaux
    Route::get('/newEtudiant', 'create')->name('create')->middleware('auth');

    Route::post('/newEtudiant', 'store')->middleware('auth');

    Route::get('/{etudiant}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('etudiant.show')->middleware('auth');

    Route::get('/{etudiant}/editEtudiant', 'edit')->name('editEtudiant')->middleware('auth');
    Route::patch('/{etudiant}/editEtudiant', 'update')->middleware('auth');
});

Route::prefix('/enseignants')->controller(EnseignantController::class)->group(function () {

    Route::get('/', 'index')->name('admin.enseignant.enseignants')->middleware('auth');

    //route--niveaux
    Route::get('/newEnseignant', 'create')->name('create')->middleware('auth');

    Route::post('/newEnseignant', 'store')->middleware('auth');

    Route::get('/{enseignant}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('enseignant.show')->middleware('auth');

    Route::get('/{enseignant}/editEnseignant', 'edit')->name('editEnseignant')->middleware('auth');
    Route::patch('/{enseignant}/editEnseignant', 'update')->middleware('auth');
});

Route::prefix('/notes')->controller(NoteController::class)->group(function () {

    Route::get('/', 'index')->name('pub.notes.notes')->middleware('auth');

    //route--niveaux
    Route::get('/newNote', 'create')->name('create')->name('notes.create')->middleware('auth');

    Route::post('/newNote', 'store')->middleware('auth');

    Route::get('/{note}', 'show')->where(
        [
            'id' => '[0-9]+'
        ]

    )->name('note.show')->middleware('auth');

    Route::get('/{note}/editNote', 'edit')->name('editNote')->middleware('auth');
    Route::patch('/{note}/editNote', 'update')->middleware('auth');
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

//php artisan make:model Note -m
//php artisan make:controller NoteController --resource --model=Note
//php artisan make:request NoteFilterRequest
