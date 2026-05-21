<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoController extends Controller
{
    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    public function index(){
        $produtos = $this->produto->all();
        return view('app.produto.index', ['produtos' => $produtos]);
    }
    public function show(string $id){

        $produto = $this->produto->find($id);

        return view('app.produto.show', ['produto' => $produto]);
    }
}
