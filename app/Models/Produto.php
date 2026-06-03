<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movimentacao;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'estoque',
        'tamanho',
    ];

    public function movimentacaos()
    {
        return $this->hasMany(Movimentacao::class);
    }
}
