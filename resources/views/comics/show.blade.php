@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-2">
                <h1>{{ $comics->title }}</h1>
                <img src="{{ $comics->thumb }}" alt="">
                <p>{{ $comics->price }}</p>
               
            </div>
            <a href="{{ route('comics.index') }}">clicca qui per vedere i comics</a>
        </div>
    </div>
@endsection