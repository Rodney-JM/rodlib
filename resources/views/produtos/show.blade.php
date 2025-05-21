@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $produto->nome }}</h1>

    <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
    <p><strong>Quantidade:</strong> {{ $produto->quantidade }}</p>
    <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    <p><strong>Nota de Avaliação:</strong> {{ $produto->nota_avaliacao }}</p>
    
    <img src="{{ asset('storage/' . $produto->imagem) }}" width="200" class="img-thumbnail">

    <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>
@endsection
