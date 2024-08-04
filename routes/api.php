<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return response()->json(['message' => 'Hello World!']);
});

Route::apiResource('user', 'App\Http\Controllers\UserController');
Route::apiResource('voluntario', 'App\Http\Controllers\VoluntarioController');
Route::apiResource('endereco', 'App\Http\Controllers\EnderecoController');
Route::apiResource('chamado', 'App\Http\Controllers\ChamadoController');
Route::apiResource('item', 'App\Http\Controllers\ItemController');
