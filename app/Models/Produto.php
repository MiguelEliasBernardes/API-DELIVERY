<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'preco',
        'nome_produto',
        'id_grupo'
    ];

    public function grupo()
    {
        return $this->belongsTo(Grupos::class);
    }
}
