@extends('layout.standard')

@section('titulo', 'Moscow Labs')

@section('conteudo')

    <div class="listagem__produtos">
            @foreach ($produtos as $produto)
                @include('app.produto.components.card', [
                    'imagem' => asset('storage/' . $produto->imagem),
                    'nome' => $produto->nome,
                    'valor' => number_format($produto->valor, 2, ',', '.')
                ])
            @endforeach
    </div>

@endsection
