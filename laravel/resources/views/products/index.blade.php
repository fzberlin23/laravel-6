@extends('products.layout')

@section('content')
    <h2>Produktverwaltung</h2>
    <a href="{{ route('products.create') }}"> Neues Produkt erstellen</a>
    <br/><br/>

    @if ($message = Session::get('success'))
        <div style="color:green;">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktion</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        <a href="{{ route('products.show',$product->id) }}">Show</a>
                        <a href="{{ route('products.edit',$product->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
