@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

<h1>CURSOS</h1>

<a href="{{ route('cursos.create') }}" class="button">Add Curso</a>

<table class="table table-white mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>SIGLA</th>
            <th>NIVEL_ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nome }}</td>
            <td>{{ $curso->sigla }}</td>
            <td>{{ $curso->nivel_id }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection