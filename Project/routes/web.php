<?php

use App\Enums\SupportStatus;
use App\Http\Controllers\SupportController;
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
    array_column(SupportStatus::cases(),'name');    
});
Route::delete('supports/{id}',[SupportController::class,'destroy'])->name('supports.destroy');
Route::put('supports/{id}',[SupportController::class,'update'])->name('supports.update');
Route::get('supports/{id}/edit',[SupportController::class,'edit'])->name('supports.edit');
Route::get('/supports/create',[SupportController::class,'create'])->name('supports.create');
Route::get('/supports/{id}',[SupportController::class,'show'])->name('supports.show');
Route::get('/supports',[SupportController::class,'index'])->name('supports.index');
Route::post("/supports",[SupportController::class,"store"])->name("supports.store");