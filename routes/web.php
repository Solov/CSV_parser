<?php

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

//Главная страница (форма загрузки файла)
Route::get('/', function(){return view('csv-load-form');})->name('load_page');

//Парсинг загруженного файла
Route::post('/parse', [\App\Http\Controllers\DocumentController::class, 'parse'])->name('parse');

//Показ списка записей
Route::get('/items', [\App\Http\Controllers\DocumentController::class, 'index'])->name('index');

//Информация по отдельной записи
Route::get('/items/{id?}', [\App\Http\Controllers\DocumentController::class, 'show'])->name('show');
