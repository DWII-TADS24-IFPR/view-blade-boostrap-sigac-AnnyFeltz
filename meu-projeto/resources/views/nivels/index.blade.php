@extends('layouts.app')

@section('title', 'Níveis')

@section('content')

<h1>Niveis</h1>

<a href="{{ route('nivels.create') }}" class="button">Add Nível</a>

<table class="table table-white mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
        </tr>
    </thead>
    <tbody>
        @foreach($nivels as $nivel)
        <tr>
            <td>{{ $nivel->id }}</td>
            <td>{{ $nivel->nome }}</td>
            <td class="d-flex justify-content-end">
                <button><a href="{{ route( 'nivels.show', $nivel->id ) }}">Show</a></button>
                <button><a href="{{ route( 'nivels.edit', $nivel->id ) }}">edit</a></button>
                <button>
                    <form action="{{ route('nivels.destroy', $nivel->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection