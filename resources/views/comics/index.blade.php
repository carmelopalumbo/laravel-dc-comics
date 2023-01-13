@extends('layouts.main')

@section('content')
    <div class="container">
        <a href="{{ route('comics.create') }}" class="btn btn-success ms-5 my-4 fs-4 px-3">+</a>
    </div>

    @if (session('delete'))
        <div class="container">
            <div class="alert alert-primary text-center m-auto w-50 mb-3" role="alert">
                {!! session('delete') !!}
            </div>
        </div>
    @endif
    <div class="container tablebox">
        <table class="table m-auto">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITOLO</th>
                    <th scope="col">PREZZO</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->price }} €</td>
                        <td>
                            <a href="{{ route('comics.show', $item) }}" class="btn btn-info"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a href="{{ route('comics.edit', $item) }}" class="btn btn-warning mx-2"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            @include('partials.delete-form', ['item' => $item])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center py-4 pag-box">
        {{ $comics->links() }}
    </div>
@endsection

@section('title')
    Home
@endsection
