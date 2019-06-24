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

Route::get('/', function () {
    return view('layout.default');
});

Route::get('/test', function () {
    return view('layout.login');
});
Route::get('/clients/selectvillage', function () {
    return view('clients.selectvillage');})->name('clients.selectvillage');
 

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/clients/list', 'ClientController@list')->name('clients.list');

Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::resource('clients', 'ClientController');


Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
Route::resource('compteurs', 'CompteurController');

Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::resource('villages', 'VillageController');

Route::get('/villages/create', 'VillageController@create')->name('villages.create');
Route::resource('villages', 'VillageController');

Route::get('/users/list', 'UserController@list')->name('users.list');
Route::resource('users', 'UserController');


Route::get('/comptables/list', 'ComptableController@list')->name('comptables.list');
Route::resource('comptables', 'ComptableController');


Route::get('/administrateurs/list', 'AdministrateurController@list')->name('administrateurs.list');
Route::resource('administrateurs', 'AdministrateurController');



Route::get('/reglements/list', 'ReglementController@list')->name('reglements.list');
Route::resource('reglements', 'ReglementController');



Route::get('/factures/list', 'FactureController@list')->name('factures.list');
Route::resource('factures', 'FactureController');



Route::get('/abonnements/selectcompteur', 'AbonnementController@selectcompteur')->name('abonnements.selectcompteur');
Route::get('/abonnements/selectclient', 'AbonnementController@selectclient')->name('abonnements.selectclient');
Route::get('/consommations/list/{abonnement?}','ConsommationController@list')->name('consommations.list');




Route::get('/consommations/list', 'ConsommationController@list')->name('consommations.list');
Route::resource('consommations', 'ConsommationController');



/* use Carbon\Carbon;
Route::get('carbon', function () {
    $date = Carbon::now();
    dump($date);
     $date->addDays(3);
    dump($date);
});
 */
