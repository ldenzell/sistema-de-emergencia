<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'api\PacienteController@login');
Route::post('perfil', 'api\PacienteController@perfil');
Route::post('emergencia', 'api\PacienteController@emergencia');