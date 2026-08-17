<?php

use App\Http\Controllers\DettagliController;
use App\Http\Controllers\IndiceController;
use App\Http\Controllers\IscrizioneController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('welcome');
})->name('welcome');

Route::get('Indice',[IndiceController::class, 'indice'])->name('indice');

// pagina dettaglio
Route::get('/articoli/{title}',[DettagliController::class, 'articoli'])->name('article');

// invio iscrizione
Route::post('/product/create', [IscrizioneController::class, 'registration'])->name('registration.point');


Route::get('/product/index', [IscrizioneController::class, 'index'])->name('product.index');