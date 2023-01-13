@extends('layouts.main')

@section('content')
    <div class="container pt-4 w-50 m-auto">
        <form action="{{ route('comics.store') }}" method="POST">

            {{-- token generator --}}
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label fw-bold">TITOLO</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    placeholder="Inserisci titolo..." value="{{ old('title') }}">
                @error('title')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">DESCRIZIONE</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3" placeholder="Inserisci descrizione...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label fw-bold">COPERTINA</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" placeholder="Inserisci URL copertina..." value="{{ old('thumb') }}">
                @error('thumb')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">PREZZO</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" placeholder="Inserisci prezzo in €..." value="{{ old('price') }}">
                @error('price')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label fw-bold">SERIE</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" placeholder="Inserisci serie comics..." value="{{ old('series') }}">
                @error('series')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label fw-bold">DATA DI USCITA</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" placeholder="Inserisci data di uscita..." value="{{ old('sale_date') }}">
                @error('sale_date')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label fw-bold">GENERE COMICS</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    placeholder="Inserisci genere comics..." value="{{ old('type') }}">
                @error('type')
                    <p class="error-message">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    </div>

    <div class="container d-flex justify-content-center py-4 ">
        <a href="{{ route('comics.index') }}" class="btn btn-danger">ANNULLA</a>
        <button type="submit" class="btn btn-success ms-4">CREA</button>
    </div>
    </form>
@endsection

@section('title')
    Aggiungi Comics
@endsection
