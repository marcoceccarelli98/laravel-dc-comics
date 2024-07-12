{{-- @dd($data) --}}

@extends('layouts.app')

@section('main')
    <section>
        <div class="add-comic">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">ADD NEW COMIC</a>
        </div>
        <div class="comics-list">
            @foreach ($data['comics'] as $comic)
                <div class="comic-card">
                    <div class="thumb-container">
                        <img src="{{ $comic['thumb'] }}" alt="Thumb not found">
                    </div>
                    <div class="title-container">
                        <p>{{ $comic['series'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
