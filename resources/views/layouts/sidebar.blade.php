<aside class="bg-white w-64 shadow-md flex flex-col h-full">
    <div class="h-16 flex items-center justify-center border-b">
        <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">{{ config('app.name', 'Laravel') }}</a>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-100 hover:text-indigo-700
            {{ request()->routeIs('dashboard') ? 'bg-indigo-100 text-indigo-700 font-semibold' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('produtos.index') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-100 hover:text-indigo-700
            {{ request()->routeIs('produtos.*') ? 'bg-indigo-100 text-indigo-700 font-semibold' : '' }}">
            Produtos
        </a>

        <!-- Outros links do menu aqui -->

    </nav>

    @auth
    <div class="border-t p-4">
        <p class="text-gray-700 mb-2">Olá, {{ Auth::user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-md">Sair</button>
        </form>
    </div>
    @endauth
</aside>
