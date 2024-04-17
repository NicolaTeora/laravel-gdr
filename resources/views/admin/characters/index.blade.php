@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">

            <div class="row g-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($characters as $character)
                            <tr>
                                <td>{{ $character['name'] }}</td>
                                @if ($character->type)
                                    <td>{{ $character->type['name'] }}</td>
                                @else
                                    <td>-</td>
                                @endif
                                <td>{{ $character['description'] }}</td>
                                <td>
                                    {{-- bottone show --}}
                                    <a class="text-wrap text-decoration-none text-bg-primary btn btn-primary"
                                        href="{{ route('admin.characters.show', $character) }}">
                                        Info
                                    </a>
                                    {{-- bottone edit --}}
                                    <a class="text-wrap text-decoration-none text-bg-success btn btn-success"
                                        href="{{ route('admin.characters.edit', $character) }}">
                                        Edit
                                    </a>
                                    {{-- bottone delete --}}
                                    <a class="text-wrap text-decoration-none text-bg-danger btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $character->id }}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $characters->links() }}

        </div>

        {{--  --}}
        {{-- modale cancellazzione --}}
        @foreach ($characters as $character)
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
                            <button type="button" class="btn btn-secondary my-2 w-100"
                                data-bs-dismiss="modal">Annulla</button>

                            <form action="{{ route('admin.characters.destroy', $character) }}" method="post"
                                class="w-100">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mb-2 w-100">Cancella personaggio</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
