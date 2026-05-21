<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function estoques()
    {
        return $this->hasMany('App\Models\Estoque', 'tamanho_id', 'id');
    }
}
