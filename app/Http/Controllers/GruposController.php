<?php

namespace App\Http\Controllers;

use App\Models\Grupos;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GruposController extends Controller
{

    public function criarGrupo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'grupo' => 'required|string|max:255'
        ]);

        if($validator->fails())
        {
            return response()->json([
                "errors" => $validator->errors(),
                "message" => "Erro ao criar grupo",
                "data" => [],
                "status" => "fail"
            ], 400);
        }

        $customer = Grupos::create($request->all());
        return response()->json([
            "message" => "grupo criado com sucesso!",
            "data" => $customer,
            "status" => "sucess"
        ], 201);
    }


    public function pesquisaGruposItens()
    {
        $grupos = Grupos::with('produtos')->get();

        return response()->json([
            "message" => "itens retornados",
            "data" => $grupos,
            "status" => "sucess",
        ], 200);
    }

}
