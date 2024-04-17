@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section class="character-show">
        <div class="container py-4">
            <div class="row">
                <h1>{{ $character['name'] }}</h1>
                <div class="col-12">
                    <ul class="ps-0">
                        <li><b>description: </b>{{ $character['description'] }}</li>
                    </ul>

                    <ul class="ps-0 d-flex w-100 justify content-between">
                        <li><b>attack: </b>{{ $character['attack'] }}</li>
                        <li class="ms-3"><b>defence: </b>{{ $character['defence'] }}</li>
                        <li class="ms-3"><b>speed: </b>{{ $character['speed'] }}</li>
                        <li class="ms-3"><b>life: </b>{{ $character['life'] }}</li>
                    </ul>
                </div>
                @if($character->type)
                <div class="col-6 class-detail">
                    <h2>Class: {{ $character->type->name }}</h2>
                    <div>
                        <p class="class-description">{{ $character->type->desc }}</p>
                    </div>
                </div>
                <div class="col-6 class-image">
                    <img src="{{ $character->type->Image }}" alt="" class="image-fluid">
                </div>
                @endif
                <div class="col-12 mt-3">
                    <div class="row">

                        <div class="col-4">
                            <button class="btn btn-warning w-100">
                                <a class="text-decoration-none text-reset"
                                    href="{{ route('admin.characters.edit', $character) }}">
                                    Modifica personaggio
                                </a>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger w-100" data-bs-toggle="modal"
                                data-bs-target="#delete-modal-{{ $character->id }}">
                                Cancella personaggio
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100">
                                <a class="text-decoration-none text-reset" href="{{ route('admin.characters.index') }}">
                                    Torna alla lista
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- modale cancellazzione --}}
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
