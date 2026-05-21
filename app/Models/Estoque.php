<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estoque extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'produto_id',
        'tamanho_id',
        'quantidade',
    ];

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto', 'produto_id', 'id');
    }

    public function tamanho()
    {
        return $this->belongsTo('App\Models\Tamanho', 'tamanho_id', 'id');
    }
}


