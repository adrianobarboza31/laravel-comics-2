@extends('layouts.app')
@section('content')
<div class="container">
  <h1>compila per aggiungere</h1>
  <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <label for="titolo">Titolo</label>
    <input type="text" name="title" id="titolo">
    <label for="description">Descrizione</label>
    <input type="text-area" name="description" id="description">
    <label for="immagine">immagine</label>
    <input type="text" name="thumb" id="immagine">
    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price">
    <label for="series">Series</label>
    <input type="text" name="series" id="series">
    <label for="sale_date">Data Vendita</label>
    <input type="text" name="sale_date" id="sale_date">
    <label for="type">Tipo</label>
    <input type="text" name="type" id="type">
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection