@extends('products.layout')

@section('content')
    <a href="{{ route('products.index') }}"><< Zurück zur Übersicht</a>
    <h2>Neues Produkt erstellen</h2>

    @if ($errors->any())
        <div style="color:red;">
            Es sind folgende Fehler aufgetreten:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        Titel:<br/>
        <input type="text" name="title" placeholder="Titel"><br/><br/>

        Beschreibung:<br/>
        <textarea name="description" placeholder="Beschreibung"></textarea><br/><br/>

        <button type="submit">Erstellen</button>
    </form>
@endsection
