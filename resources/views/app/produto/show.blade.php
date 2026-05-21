@extends('layout.standard')

@section('conteudo')

    <div class="produto__content">
        <div class="produto__img_content">
            <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}">
        </div>

        <div>
            <h2>{{$produto->nome}}</h2>
            <p>R$ {{number_format($produto->valor, 2, ',', '.')}}</p>
        </div>
    </div>

@endsection
