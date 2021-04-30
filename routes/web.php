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
    return view ('welcome');
});
 
Route::get('/keluar',function(){
    \Auth::logout();
 
    return redirect('/login');
});
 
Route::group(['middleware'=>'auth'],function(){
 
    Route::get('/merk','Merk_controller@index');

    Route::get('/merk/add','Merk_controller@add');
});


Route::group(['middleware'=>'auth'],function(){
 
    Route::get('/kategori','Merk_controller@index');

    Route::get('/kategori/add','Merk_controller@add');
});

Route::group(['middleware'=>'auth'],function(){
 
    Route::get('/pbarang','Merk_controller@index');

    Route::get('/pbarang/add','Merk_controller@add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');