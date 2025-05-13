@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Livros</h1>
    <a href="{{ route('livros.create') }}" class="btn btn-primary mb-3">Novo Livro</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th><th>Autor</th><th>Editora</th><th>Ano</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($livros as $livro)
            <tr>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->editora }}</td>
                <td>{{ $livro->ano }}</td>
                <td>
                    <a href="{{ route('livros.edit', $livro) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('livros.destroy', $livro) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
