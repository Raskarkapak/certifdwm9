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

Route::get('/insertOneArticle', function(){
    return view('/insertOneArticle');
});
Route::get('/listeProduits', function(){
    return view('/listeProduits');
});


Route::get('/insertInstrument', 'ActionController@insertInstrument');
Route::get('/listeDesInstruments', 'NavController@liste');

Route::get('/listeDesAlbums', 'NavController@listeAlbums');
Route::get('/insertAlbum','ActionController@insertAlbum');




Route::post('/updateInstrument', 'NavController@updateInstrument');
Route::post('/updateOneInstrument', 'ActionController@updateOneInstrument');

Route::post('/insertOneAlbum', 'ActionController@insertOneAlbum');
Route::post('/deleteOneAlbum', 'ActionController@deleteOneAlbum');

Route::post('/insertOneInstrument', 'ActionController@insertOneInstrument');
Route::post('/deleteOneInstrument', 'ActionController@deleteOneInstrument');