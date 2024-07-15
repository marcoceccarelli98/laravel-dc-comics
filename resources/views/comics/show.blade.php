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
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger" type="submit">
                <i class="fas fa-trash-can"></i>
            </button>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are u sure u want to delete : {{ $comic->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Abort</button>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger"
                            type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
