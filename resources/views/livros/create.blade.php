@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($livro) ? 'Editar' : 'Novo' }} Livro</h1>
    <form method="POST" action="{{ isset($livro) ? route('livros.update', $livro) : route('livros.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($livro)) @method('PUT') @endif

        <div class="form-group">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $livro->titulo ?? '' }}" required>
        </div>
        <div class="form-group">
            <label>Autor</label>
            <input type="text" name="autor" class="form-control" value="{{ $livro->autor ?? '' }}" required>
        </div>
        <div class="form-group">
            <label>Editora</label>
            <input type="text" name="editora" class="form-control" value="{{ $livro->editora ?? '' }}">
        </div>
        <div class="form-group">
            <label>Ano</label>
            <input type="number" name="ano" class="form-control" value="{{ $livro->ano ?? '' }}">
        </div>
        <div class="form-group">
        <label>Imagem da capa</label>
        <input type="file" name="imagem" class="form-control-file">
        @if(isset($livro) && $livro->imagem)
            <img src="{{ asset('storage/' . $livro->imagem) }}" alt="Capa" width="100" class="mt-2">
        @endif
    </div>

        <button class="btn btn-success mt-2">Salvar</button>
    </form>
</div>
@endsection
