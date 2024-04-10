@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <div class="row">
                <h1>{{ $type->name }}</h1>
                <div class="col-6">
                  <img src="{{ $type->Image }}" alt="" srcset="">
                </div>
                <div class="col-6">
                 <p>{{$type->desc}}</p>
                </div>
                <div class="col">
                    <button class="btn btn-success">
                        <a class="text-decoration-none text-reset" href="{{ route('admin.types.edit', $type) }}">
                            Modifica classe
                        </a>
                    </button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $type->id }}">
                        Cancella classe
                    </button>
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-reset" href="{{ route('admin.types.index') }}">
                            <-Torna alle classi </a>
                    </button>
                </div>
            </div>
        </div>


        {{-- modale cancellazzione --}}
        <div class="modal fade" id="delete-modal-{{ $type->id }}" tabindex="-1"
            aria-labelledby="delete-modal-{{ $type->id }}-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-modal-{{ $type->id }}-label">Conferma eliminazione
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        Sei sicuro di voler eliminare definitivamente la classe: {{ $type->name }}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary my-2 w-100" data-bs-dismiss="modal">Annulla</button>

                        <form action="{{ route('admin.types.destroy', $type) }}" method="post" class="w-100">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mb-2 w-100">Cancella classe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
