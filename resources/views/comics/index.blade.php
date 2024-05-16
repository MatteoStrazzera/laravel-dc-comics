@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2>Comics</h2>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add Comic</a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>
                                <img width="60" src="{{ $comic->thumb }}" alt="">
                            </td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td><a href="{{ route('comics.show', $comic) }}">View</a>/Edit/Remove</td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row"></td>
                            <td>Not Found</td>
                            <td>Not Found</td>
                            <td>Not Found</td>
                            <td>Not Found</td>
                            <td>Not Found</td>
                            <td>Not Found</td>
                            <td>Not Found</td>
                            <td>Not Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
