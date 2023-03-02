@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="container my-5">
        <form method="POST" action="{{ route('comics.update', $comic->id) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Name</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $comic->title) }}">

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ old('series', $comic->series) }}">

                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ old('type', $comic->type) }}">

                    </div>
                </div>
                {{-- cover --}}
                <div class="col-8">
                    <div class="row">
                        <div class="col-9">
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Comic cover</label>
                                <input type="url" class="form-control" id="thumb" name="thumb"
                                    value="{{ old('thumb', $comic->thumb) }}">

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <h6>preview</h6>
                                <img id="preview" src="" alt="place-holder" style="width: 70px">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $comic->price) }}">

                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Date Of Sale</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('dale_date', $comic->sale_date) }}">

                    </div>
                </div>

                {{-- artist and writers --}}

                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea type="textarea" id="artists" name="artists" class="form-control">{{ old('artists', $comic->artists) }}</textarea>

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea type="textarea" id="writers" name="writers" class="form-control">{{ old('writers', $comic->writers) }}</textarea>

                    </div>
                </div>


                {{-- description --}}

                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="textarea" id="description" name="description" class="form-control">{{ old('description', $comic->description) }}</textarea>

                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

@endsection


@section('scripts')
    <script>
        const placeholder = "https://marcolanci.it/utils/placeholder.jpg";
        const comicCover = document.getElementById("thumb");
        const preview = document.getElementById("preview");

        comicCover.addEventListener('input', () => {
            const url = comicCover.value;
            preview.src = url ? url : placeholder;
        });
    </script>
@endsection
