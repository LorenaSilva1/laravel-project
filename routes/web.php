<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplinaController;

Route::resource('disciplinas', DisciplinaController::class);