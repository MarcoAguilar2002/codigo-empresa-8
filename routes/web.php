<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController; 

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('personas',[PersonasController::class, 'index'])->name('personas.index');
Route::get('personas/crear',[PersonasController::class, 'create'])->name('personas.create');
Route::post('personas',[PersonasController::class, 'store'])->name('personas.store');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');