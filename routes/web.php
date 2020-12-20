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

Route::get('/','DashboardController@layout');
Route::get('/Dashboard2','DashboardController@layout2');
Route::get('/Unit','DashboardController@unit');
Route::get('/Unit2','DashboardController@unit2');

route::get('/login','LoginController@login');

Route::post('/Dashboard2','LoginController@afterlogin');
Route::get('/logout','LoginController@logout');

//Data PKL Mahasiswa HCBP
Route::get('/PKL','PKLController@index');
Route::get('/PKL/OlahPKL','PKLController@kelola');
Route::get('/PKL/InputPKL','PKLController@create');
Route::post('/PKL/{pkls}','PKLController@store');
Route::delete('/PKL/OlahPKL/{pkls}','PKLController@destroy');
Route::get('/PKL/OlahPKL/{pkls}/EditPKL','PKLController@edit');
Route::patch('/PKL/OlahPKL/{pkls}','PKLController@update');
Route::get('/PKL/OlahPKL/export_excel','PKLController@export_excel');
Route::post('/PKL/OlahPKL/import_excel','PKLController@import_excel');

//Data Kartu BPJS
Route::get('/BPJS','BpjsController@index');
Route::get('/BPJS/OlahBPJS','BPJSController@olah');
Route::get('/BPJS/InputBPJS','BPJSController@create');
Route::post('/BPJS/{bpjss}','BPJSController@store');
Route::delete('/BPJS/OlahBPJS/{bpjss}','BPJSController@destroy');
Route::get('/BPJS/OlahBPJS/{bpjss}/EditBPJS','BpjsController@edit');
Route::patch('/BPJS/OlahBPJS/{bpjss}','BpjsController@update');
Route::get('/BPJS/OlahBPJS/export_excel','BpjsController@export_excel');
Route::post('/BPJS/OlahBPJS/import_excel','BpjsController@import_excel');


//Data BUMN
Route::get('/BUMN','BumnController@index');
Route::get('/BUMN/OlahBUMN','BumnController@olah');
Route::get('/BUMN/InputBUMN','BumnController@create');
Route::post('/BUMN/{bumns}','BumnController@store');
Route::delete('/BUMN/OlahBUMN/{bumns}','BumnController@destroy');
Route::get('/BUMN/OlahBUMN/{bumns}/EditBUMN','BumnController@edit');
Route::patch('/BUMN/OlahBUMN/{bumns}','BumnController@update');
Route::get('/BUMN/OlahBUMN/export_excel','BumnController@export_excel');
Route::post('/BUMN/OlahBUMN/import_excel','BumnController@import_excel');

//Data Monitoring
Route::get('/Monitoring','MonitoringController@index');
Route::get('/Monitoring/OlahMonitoring','MonitoringController@olah');
Route::get('/Monitoring/InputMonitoring','MonitoringController@create');
Route::post('/Monitoring/{monitoring}','MonitoringController@store');
Route::delete('/Monitoring/OlahMonitoring/{monitorings}','MonitoringController@destroy');
Route::get('/Monitoring/OlahMonitoring/{monitorings}/EditMonitoring','MonitoringController@edit');
Route::patch('/Monitoring/OlahMonitoring/{monitorings}','MonitoringController@update');
Route::get('/Monitoring/OlahMonitoring/export_excel','MonitoringController@export_excel');
Route::post('/Monitoring/OlahMonitoring/import_excel','MonitoringController@import_excel');


