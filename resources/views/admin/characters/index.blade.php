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
s
                                    {{-- bottone show --}}
                                    <a class="text-wrap text-decoration-none text-bg-primary btn btn-primary"
                                        href="{{ route('admin.characters.show', $character) }}">
                                        Info
                                    </a>
                                    {{-- bottone edit --}}
                                    <a class="text-wrap text-decoration-none text-bg-success btn btn-success"
                                        href="{{ route('admin.characters.edit', $character) }}">
                                        Edit
                                    </a>
                                    {{-- bottone delete --}}
                                    <a class="text-wrap text-decoration-none text-bg-danger btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $character->id }}">
                                        Delete
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
