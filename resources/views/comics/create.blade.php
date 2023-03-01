@extends('layouts.app')

@section('title', 'Fans')

@section('content')
    <div class="container my-5">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Name</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Comic Name">

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type">

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Comic cover</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">

                    </div>
                </div>


                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">

                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Date Of Sale</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">

                    </div>
                </div>

                {{-- artist and writers --}}

                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea type="textarea" id="artists" name="artists" class="form-control"></textarea>

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea type="textarea" id="writers" name="writers" class="form-control"></textarea>

                    </div>
                </div>


                {{-- description --}}

                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="textarea" id="description" name="description" class="form-control"></textarea>

                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Add Comic</button>
            </div>
        </form>
    </div>

@endsection
