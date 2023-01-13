@extends('layouts.main')

@section('content')
    <div class="container py-3 editbox d-flex justify-content-between">
        <a href="{{ route('comics.index') }}"><i class="fa-solid fa-arrow-left backhome"></i></a>
        <div class="div">
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning mx-2 fs-3 mx-4"><i
                    class="fa-solid fa-pen-to-square"></i></a>
            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash fs-2 pt-1"></i></a>
        </div>
    </div>

    @if (session('edit'))
        <div class="container">
            <div class="alert alert-success text-center my-4" role="alert">
                {{ session('edit') }}
            </div>
        </div>
    @endif

    <div class="details-box mb-3 container p-2">
        <div class="container d-flex pt-5 justify-content-center">
            <div class="image px-4">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="text text-center">
                <h2>{{ $comic->title }}</h2>
                <p class="w-50 m-auto py-4">{{ $comic->description }}</p>
                <p class="w-50 m-auto"><strong>Prezzo:</strong> {{ $comic->price }} €</p>
                <p class="w-50 m-auto py-2"><strong>Serie:</strong> {{ $comic->series }}</p>
                <p class="w-50 m-auto"><strong>Data di uscita:</strong> {{ $comic->sale_date }}</p>
                <p class="w-50 m-auto py-2 text-capitalize"><strong>Tipo:</strong> {{ $comic->type }}</p>
            </div>
        </div>
    </div>
@endsection

@section('title')
    {{ $comic->title }}
@endsection
