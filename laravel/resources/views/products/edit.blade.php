@extends('products.layout')

@section('content')
    <a href="{{ route('products.index') }}"><< Zurück zur Übersicht</a>
    <h2>Produkt bearbeiten</h2>

    @if ($errors->any())
        <div style="color:red;">
            Folgende Fehler sind aufgetreten:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

        Titel:<br/>
        <input type="text" name="title" value="{{ $product->title }}" placeholder="Titel">
        <br/><br/>

        Beschreibung:<br/>
        <textarea name="description" placeholder="Beschreibung">{{ $product->description }}</textarea>
        <br/><br/>

        <button type="submit">Speichern</button>
    </form>
@endsection
