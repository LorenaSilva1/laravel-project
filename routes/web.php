<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MatriculaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('disciplinas', DisciplinaController::class);
Route::resource('aluno', AlunoController::class);
Route::resource('matricula', MatriculaController::class);