<?php

use App\Http\Controllers\GruposController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/produto', [ProdutoController::class, 'listar']);
Route::get('/produtoNome', [ProdutoController::class, 'procurarPorNome']);
Route::post('/produto', [ProdutoController::class, 'criar']);

Route::get('/gruposItens', [GruposController::class, 'pesquisaGruposItens']);
Route::post('/criarGrupo', [GruposController::class, 'criarGrupo']);