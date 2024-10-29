<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    
    public function listar()
    {
        $customer = Produto::all();
        return response()->json([
            "message" => "Produtos encontrados",
            "data" => $customer,
            "status" => "sucess"
        ], 200);
    }

    public function criar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'preco' => 'required|numeric',
            'nome_produto' => 'required|string|max:255'
        ]);

        if($validator->fails())
        {
            return response()->json([
                "errors" => $validator->errors(),
                "message" => "Erro ao criar cliente",
                "data" => [],
                "status" => "fail"
            ], 400);
        }

        $customer = Produto::create($request->all());
        return response()->json([
            "message" => "Produto criado com sucesso!",
            "data" => $customer,
            "status" => "sucess"
        ], 201);
    }


}
