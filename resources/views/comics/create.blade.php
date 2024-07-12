@extends('layouts.app')

@section('main')
    <section>
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="text-white form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="text-white  form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
                <div class="text-white  form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" required>
                </div>
                <div class="text-white  form-group">
                    <label for="price">Prezzo</label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" required>
                </div>
                <div class="text-white  form-group">
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series" class="form-control" required>
                </div>
                <div class="text-white  form-group">
                    <label for="sale_date">Data di Vendita</label>
                    <input type="date" name="sale_date" id="sale_date" class="form-control" required>
                </div>
                <div class="text-white  form-group">
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type" class="form-control" required>
                </div>
                <div class="text-white  form-group">
                    <label for="artists">Artisti (separati da virgola)</label>
                    <input type="text" name="artists[]" id="artists" class="form-control" required>
                </div>
                <div class="text-white  form-group">
                    <label for="writers">Scrittori (separati da virgola)</label>
                    <input type="text" name="writers[]" id="writers" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Crea Comic</button>
            </form>
        </div>
    </section>
@endsection
