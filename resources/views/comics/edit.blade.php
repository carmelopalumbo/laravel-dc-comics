@extends('layouts.main')

@section('content')
    <div class="container pt-4 w-50 m-auto">
        <form action="{{ route('comics.update', $comic) }}" method="POST">

            {{-- token generator --}}
            @csrf

            {{-- blade method --}}
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label fw-bold">TITOLO</label>
                <input type="text" value="{{ $comic->title }}" class="form-control @error('title') is-invalid @enderror"
                    name="title" id="title" placeholder="Inserisci titolo...">
                @error('title')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">DESCRIZIONE</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3" placeholder="Inserisci descrizione...">{{ $comic->description }}</textarea>
                @error('description')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label fw-bold">COPERTINA</label>
                <input type="text" value="{{ $comic->thumb }}" class="form-control @error('thumb') is-invalid @enderror"
                    name="thumb" id="thumb" placeholder="Inserisci URL copertina...">
                @error('thumb')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">PREZZO</label>
                <input type="text" value="{{ $comic->price }}" class="form-control @error('price') is-invalid @enderror"
                    name="price" id="price" placeholder="Inserisci prezzo in €...">
                @error('price')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label fw-bold">SERIE</label>
                <input type="text" value="{{ $comic->series }}"
                    class="form-control @error('series') is-invalid @enderror" name="series" id="series"
                    placeholder="Inserisci serie comics...">
                @error('series')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label fw-bold">DATA DI USCITA</label>
                <input type="text" value="{{ $comic->sale_date }}"
                    class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date"
                    placeholder="Inserisci data di uscita...">
                @error('sale_date')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label fw-bold">GENERE COMICS</label>
                <input type="text" value="{{ $comic->type }}" class="form-control @error('type') is-invalid @enderror"
                    name="type" id="type" placeholder="Inserisci genere comics...">
                @error('type')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
    </div>

    <div class="container d-flex justify-content-center py-4 ">
        <a href="{{ route('comics.index') }}" class="btn btn-danger">ANNULLA</a>
        <button type="submit" class="btn btn-success ms-4">AGGIORNA</button>
    </div>

    </form>
@endsection

@section('title')
    Edit
@endsection
