<?php

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
Route::get('index/', function () {
    return view('index');
});
Route::resource('stud','Student');
Route::resource('facu','Faculty');

Route::get('/one','Relation@one');
Route::get('/onemany','Relation@onemany');
Route::get('/manymany','Relation@manymany');