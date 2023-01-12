@extends('layouts.main')

@section('content')
    <table class="table w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
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
                        <a href="#" class="btn btn-info"><i class="fa-regular fa-eye"></i></a>
                        <a href="#" class="btn btn-warning mx-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center py-4">
        {{ $comics->links() }}
    </div>
@endsection
