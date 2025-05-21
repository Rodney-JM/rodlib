@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6">Editar Produto</h2>

    <form action="{{ route('produtos.update', $produto) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('produtos._form')
    </form>
</div>
@endsection
