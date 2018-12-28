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



Route::model('line', 'App\Line');





Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//module routes

Route::get('/module/factory-efficiency', 'ModuleController@factoryEfficiency')->name('module.factory_efficiency');


// master routes

Route::resource('/line', 'Master\LinesController', resourceNames('line'));

