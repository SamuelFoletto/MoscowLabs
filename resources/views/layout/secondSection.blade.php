<div class="second__content">
    <div class="second__title">
        Produtos em destaque
    </div>
    <div class="second__grid">
        <div class="second__grid">
            @foreach ($produtos as $produto)
                <x-card
                    imagem="{{ asset('storage/' . $produto->imagem) }}"
                    nome="{{ $produto->nome }}"
                    valor="{{ number_format($produto->valor, 2, ',', '.') }}"
                />
            @endforeach
        </div>
    </div>
</div>
