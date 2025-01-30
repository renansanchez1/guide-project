<a href="{{ url($categoria['link']) }}" class="category-item">
    <div class="category-box">
        <h3>{{ $categoria['titulo'] }}</h3>
        <img src="{{ asset($categoria['imagem']) }}" alt="Imagem da {{ $categoria['titulo'] }}">
        <p>{{ $categoria['descricao'] }}</p>
    </div>
</a>
