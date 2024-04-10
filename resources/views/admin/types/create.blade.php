@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <form action="{{ route('admin.types.store') }}" method="post" class="row">
                @csrf
                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-6">
                    <label for="type_id" class="form-label">Image</label>
                    <input type="text" name="type_id" class="form-control">
                </div>
                <div class="col-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
              
                <div class="col">
                    <button class="btn btn-success mt-4">Salva Nuova Classe</button>
                </div>
            </form>
            <button class="btn btn-primary my-2">
                <a class="text-decoration-none text-reset" href="{{ route('admin.types.index') }}">
                    <-Torna alle classi </a>
            </button>
        </div>
    </section>
@endsection
