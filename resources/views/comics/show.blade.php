@extends('layouts.main')

@section('content')
    <div class="container py-1 backhome">
        <a href="{{ route('comics.index') }}"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="details-box mb-3 container p-2">
        <div class="container d-flex pt-5">
            <div class="image">
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
