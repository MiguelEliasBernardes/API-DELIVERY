<?php

use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/produto', [ProdutoController::class, 'listar']);
Route::post('/produto', [ProdutoController::class, 'criar']);