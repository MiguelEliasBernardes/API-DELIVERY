<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantidade_prod',
        'total_prod',
        'id_pedido',
        'id_produto'
    ];
}
