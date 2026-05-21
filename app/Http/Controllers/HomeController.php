<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::latest()->take(4)->get();

        return view('home', ['produtos' => $produtos]);
    }
}
