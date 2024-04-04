@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <form action="{{ route('admin.characters.store') }}" method="post" class="row">
                @csrf
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
                <div class="col">
                    <button class="btn btn-success mt-4">Salva Nuovo personaggio</button>
                </div>
            </form>
        </div>
    </section>
@endsection
