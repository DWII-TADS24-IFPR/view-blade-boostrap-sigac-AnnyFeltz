@extends('layouts.app')

@section('title', 'SIGAC - Home')

@section('content')

<h1>HOME</h1>

<h3>Bem vindo!</h3>

<div class="cards">
    <div class="card">
        <ul>
            <li><h3>Alunos</h3></li>
            <li><a class="button-card" href="{{ url('/alunos') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/alunos/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/alunos/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/alunos/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>

    <div class="card">
        <ul>
            <li><h3>Categorias</h3></li>
            <li><a class="button-card" href="{{ url('/categorias') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/categorias/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/categorias/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/categorias/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>

    <div class="card">
        <ul>
            <li><h3>Comprovantes</h3></li>
            <li><a class="button-card" href="{{ url('/comprovantes') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/comprovantes/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/comprovantes/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/comprovantes/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>

    <div class="card">
        <ul>
            <li><h3>Cursos</h3></li>
            <li><a class="button-card" href="{{ url('/cursos') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/cursos/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/cursos/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/cursos/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>

    <div class="card">
        <ul>
            <li><h3>Declarações</h3></li>
            <li><a class="button-card" href="{{ url('/decaracoes') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/decaracoes/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/decaracoes/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/decaracoes/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>

    <div class="card">
        <ul>
            <li><h3>Documentos</h3></li>
            <li><a class="button-card" href="{{ url('/documentos') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/documentos/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/documentos/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/documentos/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>

    <div class="card">
        <ul>
            <li><h3>Niveis</h3></li>
            <li><a class="button-card" href="{{ url('/nivels') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/nivels/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/nivels/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/nivels/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>

    <div class="card">
        <ul>
            <li><h3>Turmas</h3></li>
            <li><a class="button-card" href="{{ url('/turmas') }}"><strong>Index</strong></a></li>
            <li><a class="button-card" href="{{ url('/turmas/create') }}"><strong>Create</strong></a></li>
            <li><a class="button-card" href="{{ url('/turmas/show') }}"><strong>Show</strong></a></li>
            <li><a class="button-card" href="{{ url('/turmas/edit') }}"><strong>Edit</strong></a></li>
        </ul>
    </div>
</div>


@endsection