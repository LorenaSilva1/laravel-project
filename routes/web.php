<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\MatriculaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('aluno', AlunoController::class);
    Route::resource('disciplinas', DisciplinaController::class);
    Route::resource('matricula', MatriculaController::class);
});

require __DIR__.'/auth.php';