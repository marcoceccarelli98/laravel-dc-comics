@extends('layouts.app')

@section('title')
    Comics - {{ $comic->title }}
@endsection

@section('main')
    <div class="mt-5 container">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="image-container">
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
            </div>
            <div class="col-6">
                <ul class="list-group ">
                    <li class="list-group-item fw-bold fs-1"><span>Title: {{ $comic->title }}</span></li>
                    <li class="list-group-item lh-base"><span>Description: {{ $comic->description }}</span></li>
                    <li class="list-group-item text-white bg-primary"><span>Series: {{ $comic->series }}</span></li>
                    <li class="list-group-item text-white bg-primary"><span>Sale Date: {{ $comic->sale_date }}</span></li>
                    <li class="list-group-item text-white bg-primary"><span>Type: {{ $comic->type }}</span></li>
                    <li class="list-group-item text-white bg-primary">
                        <span> Artists: </span>
                        @foreach ($comic->artists as $artist)
                            <span>{{ $artist }} @if (!$loop->last)
                                    ,
                                @endif
                            </span>
                        @endforeach
                    </li>
                    <li class="list-group-item text-white bg-primary">
                        <span> Writers: </span>
                        @foreach ($comic->writers as $writer)
                            <span>{{ $writer }} @if (!$loop->last)
                                    ,
                                @endif
                            </span>
                        @endforeach
                    </li>
                    <li class="list-group-item fs-4 fw-semibold bg-primary"><span>Price: {{ $comic->price }}</span></li>
                </ul>
            </div>
        </div>
        <div class="text-right mt-3">
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary mx-2"><i class="fas fa-pen"></i></a>
            <a class="btn btn-danger"><i class="fas fa-trash-can"></i></a>
        </div>
    </div>
@endsection
