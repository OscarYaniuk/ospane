<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\examen\ExamenController;

Route::get('/', function () {
    return view('examen.dashboard');
})->name('dashboard');

Route::get('/sc-{page}', [ExamenController::class, 'index'])->name('examen.index');

