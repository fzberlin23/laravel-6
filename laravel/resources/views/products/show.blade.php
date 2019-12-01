@extends('products.layout')
@section('content')
    <a href="{{ route('products.index') }}"><< Zurück zur Übersicht</a>
    <h2>Produkt anzeigen</h2>

    Titel: {{ $product->title }}
    <br/><br/>

    Beschreibung: {{ $product->description }}
    <br/><br/>
@endsection
