@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="image-container">
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
            </div>
            <div class="col-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span>Title: {{ $comic->title }}</span></li>
                    <li class="list-group-item"><span>Description: {{ $comic->description }}</span></li>
                    <li class="list-group-item"><span>Price: {{ $comic->price }}</span></li>
                    <li class="list-group-item"><span>Series: {{ $comic->series }}</span></li>
                    <li class="list-group-item"><span>Sale Date: {{ $comic->sale_date }}</span></li>
                    <li class="list-group-item"><span>Type: {{ $comic->type }}</span></li>
                    <li class="list-group-item">
                        <span> Artists: </span>
                        @foreach ($comic->artists as $artist)
                            <span>{{ $artist }}</span>
                        @endforeach
                    </li>
                    <li class="list-group-item">
                        <span> Writers: </span>
                        @foreach ($comic->writers as $writer)
                            <span>{{ $writer }}</span>
                        @endforeach
                    </li>

                </ul>
            </div>
        </div>
    </div>
@endsection
