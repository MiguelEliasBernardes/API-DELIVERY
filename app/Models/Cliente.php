<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_cliente',
        'rua_cliente',
        'numero_estabelecimento',
        'bairro',
        'referencia',
        'telefone'
    ];
}
