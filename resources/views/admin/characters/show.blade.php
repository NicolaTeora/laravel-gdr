@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <div class="row">
                <h1>{{ $character['name'] }}</h1>
                <div class="col-6">
                    <ul>
                        <li><b>description: </b>{{ $character['description'] }}</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul>
                        <li><b>attack: </b>{{ $character['attack'] }}</li>
                        <li><b>defence: </b>{{ $character['defence'] }}</li>
                        <li><b>speed: </b>{{ $character['speed'] }}</li>
                        <li><b>life: </b>{{ $character['life'] }}</li>
                    </ul>
                </div>
                <div class="col">
                    <button class="btn btn-success">
                        <a class="text-decoration-none text-reset" href="{{ route('admin.characters.edit', $character) }}">
                            Modifica personaggio
                        </a>
                    </button>
                    <button class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#delete-modal-{{ $character->id }}">Cancella personaggio
                    </button>
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-reset" href="{{ route('admin.characters.index') }}">
                            <-Torna ai personaggi </a>
                    </button>
                </div>
            </div>
        </div>



        <div class="modal fade" id="delete-modal-{{ $character->id }}" tabindex="-1"
            aria-labelledby="delete-modal-{{ $character->id }}-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-modal-{{ $character->id }}-label">Conferma eliminazione
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        Sei sicuro di voler eliminare definitivamente il progetto: {{ $character->name }}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary my-2 w-100" data-bs-dismiss="modal">Annulla</button>

                        <form action="{{ route('admin.characters.destroy', $character) }}" method="post" class="w-100">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mb-2 w-100">Cancella personaggio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
