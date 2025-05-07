@extends('layouts.app')

@section('title', 'Turmas')

@section('content')

<h1>TURMAS</h1>

<a href="{{ route('turmas.create') }}" class="button">Add Turma</a>

<table class="table table-white mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>ANO</th>
            <th>CURSO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
        <tr>
            <td>{{ $turma->id }}</td>
            <td>{{ $turma->ano }}</td>
            <td>{{ $turma->curso->nome ?? 'Sem curso' }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection