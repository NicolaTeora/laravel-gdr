@extends('layouts.app')

@section('title', 'Pagina Modifica')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <form action="{{ route('admin.types.update', $character) }}" method="post" class="row">
                @csrf
                @method('PATCH')

                <div class="col-6">
                    <label for="name" class="form-label">name</label>
                    <input value="{{ $type->name }}" type="text" name="name" class="form-control">
                </div>
                <div class="col-6">
                    <label for="name" class="form-label">name</label>
                    <input value="{{ $type->Image }}" type="text" name="name" class="form-control">
                </div>
                <div class="col-6">
                    <label for="description" class="form-label">description</label>
                    <textarea name="description" class="form-control">{{ $type->description }}</textarea>
                </div>
               
                <button class="btn btn-primary mt-4">Modify</button>
            </form>
        </div>
    </section>
@endsection
