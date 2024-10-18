<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $titulo }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $subtitulo }}</h6>
        
        <form action="{{ route($ruta) }}" method="POST" class="input-group mb-3">
            @csrf
            <input type="text" class="form-control" name="valor" placeholder="{{ $placeholder }}" required>
            <button class="btn btn-outline-secondary" type="submit">Convertir</button>

            @if (session($resultado))
                <div class="alert alert-success mt-3">
                    {{ session($resultado) }}
                </div>
            @endif
        </form>
    </div>
</div>
