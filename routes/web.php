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

Route::get('insertEvento','eventController@creazioneEvento');
Route::post('aggiungiEvento','eventController@insertEvento');

Route::get('insertServizio','eventController@creazioneServizio');
Route::post('aggiungiServizio','eventController@insertServizio');

Route::get('vedieventi', 'eventController@vediEvento');


Route::get('prova',function(){
    $eventi = \App\Event::all();
    return view('provafoto',['event'=>$eventi]);
});

Route::get('/upload', 'FileController@upForm')->name('upload.file');
Route::post('/upload', 'FileController@storeFile');
