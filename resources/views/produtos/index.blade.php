@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Produtos</h2>
    <a href="{{ route('produtos.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">
        + Adicionar Produto
    </a>
</div>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white rounded-md shadow overflow-hidden">
    <thead class="bg-indigo-600 text-white">
        <tr>
            <th class="text-left py-3 px-4">ID</th>
            <th class="text-left py-3 px-4">Nome</th>
            <th class="text-left py-3 px-4">Quantidade</th>
            <th class="text-left py-3 px-4">Preço</th>
            <th class="text-left py-3 px-4">Avaliação</th>
            <th class="text-left py-3 px-4">Imagem</th>
            <th class="text-center py-3 px-4">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($produtos as $produto)
        <tr class="border-b hover:bg-gray-50">
            <td class="py-2 px-4">{{ $produto->id }}</td>
            <td class="py-2 px-4">{{ $produto->nome }}</td>
            <td class="py-2 px-4">{{ $produto->quantidade }}</td>
            <td class="py-2 px-4">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
            <td class="py-2 px-4">{{ $produto->nota_avaliacao }}</td>
            <td class="py-2 px-4">
                @if($produto->imagem)
                    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem do produto" class="w-16 h-16 object-cover rounded">
                @else
                    <span class="text-gray-400 italic">Sem imagem</span>
                @endif
            </td>
            <td class="py-2 px-4 text-center space-x-2">
                <a href="{{ route('produtos.edit', $produto) }}" class="text-indigo-600 hover:underline">Editar</a>

                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Excluir</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="py-4 text-center text-gray-500">Nenhum produto cadastrado.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-4">
    {{ $produtos->links() }}
</div>
@endsection
