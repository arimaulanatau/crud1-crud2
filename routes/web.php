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

Route::get('/', function () {
    return view('welcome');
});
// untuk membuat Data
Route::get('/pertanyaan/create', 'PertanyaanController@create');

// untuk mengirim Data
Route::post('/pertanyaan', 'PertanyaanController@point');

// untuk menampilkan Data
Route::get('/pertanyaan', 'PertanyaanController@index'); 

// untuk menampilkan Q&A
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');

// untuk mengambil jawaban
Route::post('/jawaban/{pertanyaan_id}', 'jawabanController@point');

// untuk menampilkan jawaban
Route::get('/jawaban/{pertanyaan_id}', 'jawabanController@index');

// untuk menampilkan edit
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');

// untuk mengedit data
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');

// untuk mendelete
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');



