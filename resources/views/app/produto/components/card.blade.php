<a href="{{route('produto.show', $produto->id)}}" class="card">
    <img src="{{ $imagem }}" alt="{{ $nome }}" class="card__img">

    <h3 class="card__title">{{ $nome }}</h3>

    <p class="card__price">R$ {{ $valor }} à vista</p>
</a>
