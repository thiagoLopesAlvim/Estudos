<?php

use App\Enums\ConsultaStatus;
use App\Enums\SupportStatus;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ConsultaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('/test', function () {
    array_column(ConsultaStatus::cases(),'name');    
});
Route::delete('supports/{id}',[SupportController::class,'destroy'])->name('supports.destroy');
Route::put('supports/{id}',[SupportController::class,'update'])->name('supports.update');
Route::get('supports/{id}/edit',[SupportController::class,'edit'])->name('supports.edit');
Route::get('/supports/create',[SupportController::class,'create'])->name('supports.create');
Route::get('/supports/{id}',[SupportController::class,'show'])->name('supports.show');
Route::get('/supports',[SupportController::class,'index'])->name('supports.index');
Route::post("/supports",[SupportController::class,"store"])->name("supports.store");

Route::delete('consultas/{id}',[ConsultaController::class,'destroy'])->name('consultas.destroy');
Route::put('consultas/{id}',[ConsultaController::class,'update'])->name('consultas.update');
Route::get('consultas/{id}/edit',[ConsultaController::class,'edit'])->name('consultas.edit');
Route::get('/consultas/create',[ConsultaController::class,'create'])->name('consultas.create');
Route::get('/consultas/{id}',[ConsultaController::class,'show'])->name('consultas.show');
Route::get('/consultas',[ConsultaController::class,'index'])->name('consultas.index');
Route::post("/consultas",[ConsultaController::class,"store"])->name("consultas.store");