<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/',function(){
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('paciente', 'PacienteController@index')->name('paciente.index');
Route::get('paciente/create', 'PacienteController@create')->name('paciente.create');
Route::post('paciente', 'PacienteController@store')->name('paciente.store');
Route::get('paciente/{paciente}/edit', 'PacienteController@edit')->name('paciente.edit');
Route::patch('paciente/{paciente}', 'PacienteController@update')->name('paciente.update');
Route::delete('paciente/{paciente}', 'PacienteController@destroy')->name('paciente.destroy');

Route::get('paramedico', 'ParamedicoController@index')->name('paramedico.index');
Route::get('paramedico/create', 'ParamedicoController@create')->name('paramedico.create');
Route::post('paramedico', 'ParamedicoController@store')->name('paramedico.store');
Route::get('paramedico/{paramedico}/edit', 'ParamedicoController@edit')->name('paramedico.edit');
Route::patch('paramedico/{paramedico}', 'ParamedicoController@update')->name('paramedico.update');
Route::delete('paramedico/{paramedico}', 'ParamedicoController@destroy')->name('paramedico.destroy');

Route::get('ambulancia', 'AmbulanciaController@index')->name('ambulancia.index');
Route::get('ambulancia/create', 'AmbulanciaController@create')->name('ambulancia.create');
Route::post('ambulancia', 'AmbulanciaController@store')->name('ambulancia.store');
Route::get('ambulancia/{ambulancia}/edit', 'AmbulanciaController@edit')->name('ambulancia.edit');
Route::patch('ambulancia/{ambulancia}', 'AmbulanciaController@update')->name('ambulancia.update');
Route::delete('ambulancia/{ambulancia}', 'AmbulanciaController@destroy')->name('ambulancia.destroy');

Route::get('seguimiento', 'SeguimientoController@index')->name('seguimiento.index');
Route::get('seguimiento/create', 'SeguimientoController@create')->name('seguimiento.create');
Route::post('seguimiento', 'SeguimientoController@store')->name('seguimiento.store');
Route::get('seguimiento/{seguimiento}/edit', 'SeguimientoController@edit')->name('seguimiento.edit');
Route::patch('seguimiento/{seguimiento}', 'SeguimientoController@update')->name('seguimiento.update');
Route::delete('seguimiento/{seguimiento}', 'SeguimientoController@destroy')->name('seguimiento.destroy');

Route::get('emergencia', 'EmergenciaController@index')->name('emergencia.index');
Route::get('emergencia/{emergencia}', 'EmergenciaController@show')->name('emergencia.show');
Route::delete('emergencia/{emergencia}', 'EmergenciaController@destroy')->name('emergencia.destroy');