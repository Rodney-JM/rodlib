@extends('layouts.app')

@section('title', 'Adicionar Produto')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6">Adicionar Produto</h2>

    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        @include('produtos._form')
    </form>
</div>
@endsection
