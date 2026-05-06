<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::latest()->take(4)->get();

        return view('home', compact('produtos'));
    }
}
