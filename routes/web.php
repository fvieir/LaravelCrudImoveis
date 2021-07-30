<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/imoveis' , [ImovelController::class , 'create'])->name('imoveis.create');
Route::post('/imoveis/store ', [ImovelController::class , 'store'])->name('imoveis.store');
Route::get('/imoveis/index' , [ImovelController::class , 'index'])->name('imoveis.index');
Route::get('/imoveis/edit', [ImovelController::class] , 'edit')->name('imoveis.edit');
Route::delete('imoveis/remove' , [ImovelController::class] , 'remove')->name('imoveis.remove');
Route::get('imoveis/show/{id}' , [ImovelController::class] , 'show')->name('imoveis.show');*/

Route::resource('imoveis', ImovelController::class);
Route::get('/imoveis/remove/{id}', [ImovelController::class , 'remove'])->name('imoveis.remove');


