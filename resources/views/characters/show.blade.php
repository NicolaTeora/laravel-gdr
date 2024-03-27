<div class="container mt-3">
    <a href="{{ route('character.index') }}" class="btn btn-primary my-3">Torna alla lista</a>
    <a href="{{ route('character.edit', $character) }}" class="btn btn-primary my-3">Modifica Dettagli</a>
    <h1>#{{ $character->id }}: {{ $character->name }}</h1>

    <div class="row">
        {{-- <div class="col-6">
            <img src="{{ $character->thumb }}" alt="{{ $character->series }}" class="img-fluid mt-3 character-image">
        </div> --}}

        <div class="col-6">
            <h2 class="h4 mt-3">Descrizione:</h2>
            <p class="mt-3">{{ $character->description }}</p>
            <div class="row mt-3">
                <div class="col-6">
                    <h2 class="h5 mt-3 d-inline">Attacco: </h2>
                    <span>{{ $character->attack }}</span>
                </div>

                <div class="col-6">
                    <h2 class="h5 mt-3 d-inline">Difesa: </h2>
                    <span>{{ $character->defense }}</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h2 class="h5 mt-3 d-inline">Velocità: </h2>
                    <span>{{ $character->speed }}</span>
                </div>

                <div class="col-6">
                    <h2 class="h5 mt-3 d-inline">Punti Vita: </h2>
                    <span>{{ $character->life }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection