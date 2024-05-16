@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a new Comic</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Comic name #1" />
                <small id="titleHelper" class="form-text text-muted">Type a comic title</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    aria-describedby="descriptionHelper" placeholder="Comic description..."></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="https://" />
                <small id="thumbHelper" class="form-text text-muted">Type an image URL</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="$99.99" />
                <small id="priceHelper" class="form-text text-muted">Type a comic price</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Comic series" />
                <small id="titleHelper" class="form-text text-muted">Type a comic series</small>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="2018-10-03" />
                <small id="sale_dateHelper" class="form-text text-muted">Type a comic sale date</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="Comic book" />
                <small id="typeHelper" class="form-text text-muted">Inserte a type </small>
            </div>
            <button type="submit" class="btn btn-success">
                Add new Comic
            </button>
        </form>
    </div>
@endsection
