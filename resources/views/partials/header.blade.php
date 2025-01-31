<header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('index') }}">
            <img src="{{ asset($logo) }}" alt="Zendesk Logo" width="200">
        </a>
        <div class="d-flex ms-auto">
            @foreach($botoes as $botao)
                <a class="navbar-brand" href="{{ url($botao['link']) }}">
                    <button class="btn btn-outline-primary" type="button">{{ $botao['texto'] }}</button>
                </a>
            @endforeach
        </div>
    </div>
</header>
