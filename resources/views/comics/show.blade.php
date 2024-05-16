@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <h2>{{ $comic->title }}</h2>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <strong>Description:</strong> {{ $comic->description }}
                    </li>
                    <hr>
                    <li>
                        <strong>Series:</strong>{{ $comic->series }}
                    </li>
                    <li>
                        <strong>Type:</strong>{{ $comic->type }}
                    </li>
                    <hr>
                    <li>
                        <strong>Price:</strong>{{ $comic->price }}
                    </li>
                    <li>
                        <strong>Sale date:</strong>{{ $comic->sale_date }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
