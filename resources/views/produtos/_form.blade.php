@csrf

<div class="mb-4">
    <label for="nome" class="block text-gray-700 font-semibold mb-1">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ old('nome', $produto->nome ?? '') }}" required
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
    @error('nome')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="descricao" class="block text-gray-700 font-semibold mb-1">Descrição</label>
    <textarea name="descricao" id="descricao" rows="3" required
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('descricao', $produto->descricao ?? '') }}</textarea>
    @error('descricao')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4 grid grid-cols-1 md:grid-cols-3 gap-4">
    <div>
        <label for="quantidade" class="block text-gray-700 font-semibold mb-1">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" min="0" value="{{ old('quantidade', $produto->quantidade ?? '') }}" required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        @error('quantidade')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="preco" class="block text-gray-700 font-semibold mb-1">Preço (R$)</label>
        <input type="number" step="0.01" min="0" name="preco" id="preco" value="{{ old('preco', $produto->preco ?? '') }}" required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        @error('preco')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="nota_avaliacao" class="block text-gray-700 font-semibold mb-1">Nota de Avaliação</label>
        <input type="number" step="0.1" min="0" max="5" name="nota_avaliacao" id="nota_avaliacao" value="{{ old('nota_avaliacao', $produto->nota_avaliacao ?? '') }}" required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        @error('nota_avaliacao')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mb-4">
    <label for="imagem" class="block text-gray-700 font-semibold mb-1">Imagem do Produto</label>
    @if (!empty($produto->imagem))
        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem atual" class="w-32 h-32 object-cover rounded mb-2">
    @endif
    <input type="file" name="imagem" id="imagem" accept="image/*"
        class="block w-full text-gray-700">
    @error('imagem')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-md">
    Salvar
</button>
