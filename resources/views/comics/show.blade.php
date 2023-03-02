@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <section id="comics-detail" class="container">

        <div class="thumb">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="row">
            <div class="col-content">
                {{-- TITLE --}}
                <h1>{{ $comic->title }}</h1>

                {{-- PRICE BOX --}}
                <div class='price-box'>
                    <div class='price'>
                        <p>U.S.Price: <strong class='comic-price'>{{ $comic->price }}</strong></p>
                        <strong>AVAILABLE</strong>
                    </div>
                    <div class='availability'>Check Availability &#9660;</div>
                </div>
                {{-- DECRIPTION --}}

                <div class="description">
                    <p>{{ $comic->description }}</p>
                </div>


            </div>


        </div>

        <div class="row">
            <div class="talent">
                <h3>Talent</h3>
                <div class="col-talent">
                    <div class="artists">

                        <p>Art by: </p>
                        <address>{{ $comic->artists }}</address>
                    </div>
                    <div class="writers">
                        <p>Writer by: </p>
                        <address>{{ $comic->writers }}</address>

                    </div>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="col-specs">
                    <div class="series"><strong>Series : </strong>{{ $comic->series }}</div>
                    <div class="series"><strong>U.S.Price: </strong> {{ $comic->price }}</div>
                    <div class="series"><strong>Series : </strong>{{ $comic->sale_date }}</div>
                </div>
            </div>

            <div class="d-flex ">
                <button class="btn btn-primary"><a style="color:#fff" href="{{ route('comics.edit', $comic->id) }}">Edit
                        Comic</a> </button>

                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ms-3">Delete Comic</button>
                </form>
            </div>
        </div>
    @endsection
