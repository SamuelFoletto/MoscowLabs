@extends('layout.standard')

@section('conteudo')

    <div class="produto__content">
        <div class="produto__img-content">
            <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}">
        </div>

        <div class="produto__text-content">
            <h2>{{$produto->nome}}</h2>
            <p class="produto__value">R$ {{number_format($produto->valor, 2, ',', '.')}}</p>
            <p>Ou 3x de <b>R${{number_format($produto->valor / 3, 2, ',', '.')}}</b> sem juros</p>
            <p>Teste Teste Teste Teste</p>
        </div>
    </div>

@endsection
