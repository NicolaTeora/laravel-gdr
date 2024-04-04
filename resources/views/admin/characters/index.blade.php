@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">

            <div class="row g-2">
                @foreach ($characters as $character)
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <h2>{{ $character['name'] }}</h2>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><b>description: </b>{{ $character['description'] }}</li>
                                    <li><b>attack: </b>{{ $character['attack'] }}</li>
                                    <li><b>defence: </b>{{ $character['defence'] }}</li>
                                    <li><b>speed: </b>{{ $character['speed'] }}</li>
                                    <li><b>life: </b>{{ $character['life'] }}</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a class="text-wrap text-bg-primary badge"
                                    href="{{ route('admin.characters.show', $character) }}">Dettagli Personaggio</a><br>
                                <a class="text-wrap text-bg-success badge"
                                    href="{{ route('admin.characters.create') }}">Aggiungi Personaggio</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
