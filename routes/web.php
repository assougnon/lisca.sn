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


Route::get('test',function (){
    event(new \App\Events\AjoutNouveauPatientEvent('someone'));
    return 'event has been sent !';
});

/*Route pour les patients*/
Route::get('malades','MaladeController@index')->name('home');
Route::get('statistiques','MaladeController@stat');
Route::get('protocoles/create','MaladeController@createProtocole');
Route::get('protocoles','MaladeController@protocole');
Route::post('protocoles','MaladeController@saveProtocole');
Route::get('malades/create','MaladeController@create');
Route::post('malades','MaladeController@store');
Route::get('malades/{maladeId}','MaladeController@show');
Route::get('malades/{maladeId}/edit','MaladeController@edit');
Route::patch('malades/{maladeId}','MaladeController@update');
Route::delete('malades/{maladeId}','MaladeController@destroy');

/* Route pour les médicaments*/
Route::get('medicaments','MedicamentController@index');
Route::get('medicaments/create','MedicamentController@create');
Route::post('medicaments','MedicamentController@store');
Route::get('medicaments/{idMedicament}','MedicamentController@show');
Route::get('medicaments/{idMedicament}/edit','MedicamentController@edit');
Route::patch('medicaments/{idMedicament}','MedicamentController@update');
Route::delete('medicaments/{idMedicament}','MedicamentController@destroy');

/*Route pour les Fournisseurs*/
Route::get('fournisseurs','FournisseurController@index');
Route::get('fournisseurs/create','FournisseurController@create');
Route::post('fournisseurs','FournisseurController@store');
Route::get('fournisseurs/{idFournisseur}','FournisseurController@show');
Route::get('fournisseurs/{idFournisseur}/edit','FournisseurController@edit');
Route::patch('fournisseurs/{idFournisseur}','FournisseurController@update');
Route::delete('fournisseurs/{idFournisseur}','FournisseurdaController@destroy');

/*rout pour les hopitaux*/
Route::get('hopitaux','HopitalController@index');
Route::get('hopitaux/create','HopitalController@create');
Route::post('hopitaux','HopitalController@store');
Route::get('hopitaux/{idHopital}','HopitalController@show');
Route::get('hopitaux/{idHopital}/edit','HopitalController@edit');
Route::patch('hopitaux/{idHopital}','HopitalController@update');
Route::delete('hopitaux/{idHopital}','HopitalController@destroy');


Auth::routes();

Route::get('users/', 'HomeController@index');
