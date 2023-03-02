<?php

use Illuminate\Support\Facades\Route;
use illuminate\support\Facades\DB;

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


//table_pengaduan
Route::get('/pengaduan', 'PengaduanController@index')->name('data-pengaduan');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::post('pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/show/{id}', 'PengaduanController@show');
Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
Route::post('/pengaduan/update/{id}', 'PengaduanController@update');
Route::get('/pengaduan/destroy/{id}', 'PengaduanController@destroy');