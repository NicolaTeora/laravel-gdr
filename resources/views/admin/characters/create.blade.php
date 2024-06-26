@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <form action="{{ route('admin.characters.store') }}" method="post" class="row">
                @csrf
                {{-- input classe --}}
                <div class="col-6">
                    <label for="type_id" class="form-label">Classe</label>
                    <select class="form-select" id="type_id" name="type_id">
                        @foreach ($types as $type)
                            <option {{ $type->id == old('type_id') ? 'selected' : '' }} value="{{ $type->id }}">
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- input nome --}}
                <div class="col-6">
                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                {{-- input attack --}}
                <div class="col-6">
                    <label for="attack" class="form-label">attack</label>
                    <input type="number" min="1" max="100" name="attack" class="form-control">
                </div>
                {{-- input defence --}}
                <div class="col-6">
                    <label for="defence" class="form-label">defence</label>
                    <input type="number" min="1" max="100" name="defence" class="form-control">
                </div>
                {{-- input speed --}}
                <div class="col-6">
                    <label for="speed" class="form-label">speed</label>
                    <input type="number" min="1" max="100" name="speed" class="form-control">
                </div>
                {{-- input life --}}
                <div class="col-6">
                    <label for="life" class="form-label">life</label>
                    <input type="number" min="1" max="100" name="life" class="form-control">
                </div>
                {{-- input description --}}
                <div class="col-12">
                    <label for="description" class="form-label">description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                {{-- bottone salvataggio --}}
                <div class="col">
                    <button class="btn btn-success mt-4">Salva Nuovo personaggio</button>
                </div>
            </form>

            {{-- bottone back index --}}
            <button class="btn btn-primary my-2">
                <a class="text-decoration-none text-reset" href="{{ route('admin.characters.index') }}">
                    <-Torna ai personaggi </a>
            </button>
        </div>
    </section>
@endsection
