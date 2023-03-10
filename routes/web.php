<?php

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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('linea', App\Http\Controllers\LineaController::class);

    Route::get('import', [App\Http\Controllers\ImportController::class, 'index']);

    Route::post('import/linea', [App\Http\Controllers\ImportController::class, 'import_linea'])->name('import.linea');
    Route::post('import/categoria', [App\Http\Controllers\ImportController::class, 'import_categoria'])->name('import.categoria');

});