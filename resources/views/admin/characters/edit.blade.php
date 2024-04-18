@extends('layouts.app')

@section('title', 'Pagina Modifica')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <form action="{{ route('admin.characters.update', $character) }}" method="post" class="row">
                @csrf
                @method('PATCH')

                {{-- input classe --}}
                <div class="col-6 mt-3">
                    <label for="type_id" class="form-label">Classe</label>
                    <select class="form-select" id="type_id" name="type_id">
                        @foreach ($types as $type)
                            <option {{ $type->id == old('type_id') ? 'selected' : '' }} value="{{ $type->id }}">
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- edit nome --}}
                <div class="col-6 mt-3">
                    <label for="name" class="form-label">name</label>
                    <input value="{{ $character->name }}" type="text" name="name" class="form-control">
                </div>

                {{-- edit attacco --}}
                <div class="col-6 mt-3">
                    <label for="attack" class="form-label">attack</label>
                    <input value="{{ $character->attack }}" type="number" min="1" max="100" name="attack"
                        class="form-control">
                </div>

                {{-- edit difesa --}}
                <div class="col-6 mt-3">
                    <label for="defence" class="form-label">defence</label>
                    <input value="{{ $character->defense }}" type="number" min="1" max="100" name="defense"
                        class="form-control">
                </div>
                {{-- edit speed --}}
                <div class="col-6 mt-3">
                    <label for="speed" class="form-label">speed</label>
                    <input value="{{ $character->speed }}" type="number" min="1" max="100" name="speed"
                        class="form-control">
                </div>
                {{-- edit life --}}

                <div class="col-6 mt-3">
                    <label for="life" class="form-label">life</label>
                    <input value="{{ $character->life }}" type="number" min="1" max="100" name="life"
                        class="form-control">
                </div>

                {{-- edit descrizione --}}
                <div class="col-12 mt-3">
                    <label for="description" class="form-label">description</label>
                    <textarea name="description" class="form-control">{{ $character->description }}</textarea>
                </div>
                {{-- bottoni --}}
                <div class="col-3">
                    {{-- bottone conferma modifica --}}
                    <button class="btn btn-success mt-4">Edit</button>
                    {{-- bottone ritorna all'index --}}
                    <button class="btn btn-primary mt-4">
                        <a class="text-decoration-none text-reset" href="{{ route('admin.characters.index') }}"><- Lista</a>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
