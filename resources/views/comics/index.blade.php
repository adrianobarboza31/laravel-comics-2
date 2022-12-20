
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h3><a href="{{ route('comics.create') }}">Aggiungi Comic</a></h3>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <h1>{{ $comic->title }}</h1>
                    <img src="{{ $comic->thumb }}" alt="">
                    <p>{{ $comic->price }}</p>
                  
                </div>
            @endforeach
        </div>
    </div>
@endsection