@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <h1 class="my-4">Armory Team 4</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Danno</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->weight }}</td>
                            <td>{{ $item->cost }}</td>
                            <td>{{ $item->damage_dice }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $items->links() }}
        </div>
    </section>
@endsection
