@extends('layouts.app')
@section('content')
<div class="container">
  <h1>modifica:{{$comic->title}}</h1>
  <form action="{{ route('comics.update',$comic->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="titolo">Titolo</label>
    <input type="text" name="title" id="titolo" value="{{old('title',$comic->title)}}">
    <label for="description">Descrizione</label>
    <input type="text-area" name="description" id="description" value="{{old('description',$comic->description)}} "  >
    <label for="immagine">immagine</label>
    <input type="text" name="thumb" id="immagine" value="{{old('thumb',$comic->thumb)}} " >
    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price" value="{{old('price',$comic->price)}} " >
    <label for="series">Series</label>
    <input type="text" name="series" id="series" value="{{old('series',$comic->series)}}" >
    <label for="sale_date">Data Vendita</label>
    <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date',$comic->sale_date)}}" >
    <label for="type">Tipo</label>
    <input type="text" name="type" id="type" value="{{old('type',$comic->type)}}" >
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection