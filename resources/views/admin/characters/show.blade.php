@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <div class="row">
                <div class="col-6">
                    <h1>{{ $character['name'] }}</h1>
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
                <a class="btn btn-primary " href="{{ route('characters.edit', $character) }}">Edit personaggio</a>
                <form action="{{ route('characters.destroy', $character) }}" method="post" class="w-100">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary mt-3">cancella personaggio</button>
                </form>
            </div>
        </div>
        </div>
        </div>
    @endsection
