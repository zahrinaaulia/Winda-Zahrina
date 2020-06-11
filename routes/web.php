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


Route::get('/','KategoriController@index');
Route::get('/makanan','EditMakananController@index');
Route::post('/addKategori','KategoriController@store');
Route::get('/deleteBahan/{id}','EditMakananController@destroy');

Route::post('/addBahan','EditMakananController@store');
Route::get('/delete/{id}','KategoriController@destroy');

Route::post('/editBahan','EditMakananController@edit');
Route::post('/editKategori','KategoriController@edit');
