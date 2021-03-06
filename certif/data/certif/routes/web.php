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
    return view('accueil');
});




Route::get('/insertInstrument', 'ActionController@insertInstrument');
Route::get('/listeDesInstruments', 'NavController@liste');

Route::post('/updateInstrument', 'NavController@updateInstrument');
Route::post('/updateOneInstrument', 'ActionController@updateOneInstrument');
Route::post('/insertOneInstrument', 'ActionController@insertOneInstrument');
Route::post('/deleteOneInstrument', 'ActionController@deleteOneInstrument');




Route::get('/insertAlbum','ActionController@insertAlbum');
Route::get('/listeDesAlbums', 'NavController@listeAlbums');

Route::post('/updateAlbum', 'NavController@updateAlbum');
Route::post('/updateOneAlbum', 'ActionController@updateOneAlbum');
Route::post('/insertOneAlbum', 'ActionController@insertOneAlbum');
Route::post('/deleteOneAlbum', 'ActionController@deleteOneAlbum');





Route::get('/insertGenre', 'ActionController@insertGenre');
Route::get('/listeDesGenres', 'NavController@listeGenres');

Route::post('/insertOneGenre', 'ActionController@insertOneGenre');
Route::post('/deleteOneGenre', 'ActionController@deleteOneGenre');




















Route::get('/894', 'NavController@huitCent');


































