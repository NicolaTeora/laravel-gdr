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
                            <th>Image Url</th>
                            <th>Description</th>
                            <th>more...</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($types as $type)
                        <tr>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->Image }}</td>
                            <td>{{ $type->desc }}</td>
                            <td>
                                <a class="text-wrap text-decoration-none text-bg-primary btn btn-primary"
                                href="{{ route('admin.types.show', $type) }}">
                                ...
                                </a>
                                <a class="text-wrap text-decoration-none text-bg-success btn btn-warning"
                                href="{{ route('admin.types.create') }}">
                                +
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
