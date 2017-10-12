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

// Route buku ini yaaaaaa :)))

Route::prefix('home/buku')->group(function () {
    Route::get('/', 'BukuController@index')->name('index.buku')->middleware('auth');
    Route::get('/add', 'BukuController@create')->name('add.buku')->middleware('auth');
    Route::post('/store', 'BukuController@store')->name('store.buku')->middleware('auth');
    Route::get('/detail/{id}', 'BukuController@show')->name('detail.buku')->middleware('auth');
    Route::get('/edit/{id}', 'BukuController@edit')->name('edit.buku')->middleware('auth');
	Route::post('/update/{id}', 'BukuController@update')->name('update.buku')->middleware('auth');
	Route::get('/delete/{id}', 'BukuController@destroy')->name('delete.buku')->middleware('auth');

    Route::get('/q', 'BukuController@index')->name('q')->middleware('auth');
});

// Route table pasok ini yaaaaaa :)))

Route::prefix('home/pasok')->group(function () {
    Route::get('/', 'PasokController@index')->name('index.pasok')->middleware('auth');
    Route::get('/addPasok', 'PasokController@create')->name('addPasok.pasok')->middleware('auth');
    Route::post('/storePasok', 'PasokController@store')->name('storePasok.pasok')->middleware('auth');
    Route::get('/detailPasok/{id}', 'PasokController@show')->name('detailPasok.pasok')->middleware('auth');
    Route::get('/editPasok/{id}', 'PasokController@edit')->name('editPasok.pasok')->middleware('auth');
	Route::post('/updatePasok/{id}', 'PasokController@update')->name('updatePasok.pasok')->middleware('auth');
	Route::get('/deletePasok/{id}', 'PasokController@destroy')->name('deletePasok.pasok')->middleware('auth');

    Route::get('/querysearch', 'PasokController@index')->name('querysearch')->middleware('auth');
});

// Route table distributor ini yaaaaaa :)))

Route::prefix('home/distributor')->group(function () {
    Route::get('/', 'DistributorController@index')->name('index.distributor')->middleware('auth');
    Route::get('/addDistributor', 'DistributorController@create')->name('addDistributor.distributor')->middleware('auth');
    Route::post('/storeDistributor', 'DistributorController@store')->name('storeDistributor.distributor')->middleware('auth');
    Route::get('/detailDistributor/{id}', 'DistributorController@show')->name('detailDistributor.distributor')->middleware('auth');
    Route::get('/editDistributor/{id}', 'DistributorController@edit')->name('editDistributor.distributor')->middleware('auth');
    Route::post('/updateDistributor/{id}', 'DistributorController@update')->name('updateDistributor.distributor')->middleware('auth');
    Route::get('/deleteDistributor/{id}', 'DistributorController@destroy')->name('deleteDistributor.distributor')->middleware('auth');

    Route::get('/querysearch', 'DistributorController@index')->name('querysearchofdistributor')->middleware('auth');
});


Route::prefix('home/penjualan')->group(function(){
    Route::get('/', 'PenjualanController@index')->name('index.penjualan');
    Route::get('addPenjualan', 'PenjualanController@create')->name('addPenjualan.penjualan');
    Route::post('storePenjualan', 'PenjualanController@store')->name('storePenjualan.penjualan');
    Route::get('detailPenjualan/{id}', 'PenjualanController@store')->name('detailPenjualan.penjualan');
    Route::get('editPenjualan/{id}', 'PenjualanController@edit')->name('editPenjualan.penjualan');
    Route::post('updatePenjualan/{id}', 'PenjualanController@update')->name('updatePenjualan.delete_data');
    Route::get('deletePenjualan/{id}', 'PenjualanController@delete')->name('deletePenjualan.delete_data');
});


Route::prefix('home')->group(function () {
    Route::get('/profile', 'UserController@index')->name('user.profile')->middleware('auth');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');