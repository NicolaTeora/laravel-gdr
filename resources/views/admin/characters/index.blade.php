@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">

            <div class="row g-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Description</th>
                            <th>more...</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($characters as $character)
                            <tr>
                                <td>{{ $character['name'] }}</td>
                                @if ($character->type)
                                    <td>{{ $character->type['name'] }}</td>
                                @else
                                    <td>-</td>
                                @endif
                                <td>{{ $character['description'] }}</td>
                                <td>
                                    <a class="text-wrap text-decoration-none text-bg-primary btn btn-primary"
                                        href="{{ route('admin.characters.show', $character) }}">
                                        ...
                                    </a>

                                    <a class="text-wrap text-decoration-none text-bg-success btn btn-warning"
                                        href="{{ route('admin.characters.create') }}">
                                        +
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $characters->links() }}

        </div>
    </section>
@endsection
