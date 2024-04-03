@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Pagina Modifica')
=======
@section('title', 'Pagina iniziale')
>>>>>>> 4-creazione-vista-show

@section('main-content')
    <section>
        <div class="container py-4">
<<<<<<< HEAD
            <form action="{{route('characters.update')}}" method="post" class="row">
            @csrf
            @method('PATCH')

            <div class="col-6">
                <label for="name" class="form-label">name</label>
                <input value="{{ $character->name }}" type="text" name="name" class="form-control">
            </div>
            <div class="col-6">
                <label for="description" class="form-label">description</label>
                <textarea value="{{ $character->description }}" name="description" class="form-control"></textarea>
            </div>
            <div class="col-6">
                <label for="attack" class="form-label">attack</label>
                <input value="{{ $character->attack }}" type="number" min="1" max="100" name="attack" class="form-control">
            </div>
            <div class="col-6">
                <label for="defence" class="form-label">defence</label>
                <input value="{{ $character->defense }}" type="number" min="1" max="100" name="defence" class="form-control">
            </div>
            <div class="col-6">
                <label for="speed" class="form-label">speed</label>
                <input value="{{ $character->speed }}" type="number" min="1" max="100" name="speed" class="form-control">
            </div>
            <div class="col-6">
                <label for="life" class="form-label">life</label>
                <input value="{{ $character->life }}" type="number" min="1" max="100" name="life" class="form-control">
            </div>
            <button class="btn btn-primary mt-4">Modify</button>
=======
            <form action="{{route('characters.update', $character)}}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="col-6">
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-6">
                <label for="description" class="form-label">description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="col-6">
                <label for="attack" class="form-label">attack</label>
                <input type="number" min="1" max="100" name="attack" class="form-control">
            </div>
            <div class="col-6">
                <label for="defence" class="form-label">defence</label>
                <input type="number" min="1" max="100" name="defence" class="form-control">
            </div>
            <div class="col-6">
                <label for="speed" class="form-label">speed</label>
                <input type="number" min="1" max="100" name="speed" class="form-control">
            </div>
            <div class="col-6">
                <label for="life" class="form-label">life</label>
                <input type="number" min="1" max="100" name="life" class="form-control">
            </div>
            <button class="btn btn-primary mt-4">Submit</button>
>>>>>>> 4-creazione-vista-show
            </form>
        </div>
    </section>
@endsection
