<?php

use App\Http\Controllers\CandidatoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route :: get('/',[CandidatoController::class,'index'])->name('candidatos.ver');
Route :: get('/create',[CandidatoController::class,'create'])->name('candidatos.create');
Route :: post('/create',[CandidatoController::class,'store'])->name('candidatos.store');
Route :: get('/edit/{id}',[CandidatoController::class,'edit'])->name('candidatos.edit');
Route :: delete('/delete/{id}',[CandidatoController::class,'destroy'])->name('candidatos.delete');
Route :: put('/update/{id}',[CandidatoController::class,'update'])->name('candidatos.update');
Route :: get('/ordenar',[CandidatoController::class,'ordenar'])->name('candidatos.ordenar');
Route :: post('/buscar',[CandidatoController::class,'buscar'])->name('candidatos.search');


