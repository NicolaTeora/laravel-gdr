@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <div class="row">
                @foreach($characters as $character)
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{$character['name']}}</h2>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><b>description: </b>{{$character['description']}}</li>
                                <li><b>description: </b>{{$character['description']}}</li>
                                <li><b>attack: </b>{{$character['attack']}}</li>
                                <li><b>defence: </b>{{$character['defence']}}</li>
                                <li><b>speed: </b>{{$character['speed']}}</li>
                                <li><b>life: </b>{{$character['life']}}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('characters.show', $character)}}">più dettagli...</a>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
@endsection
