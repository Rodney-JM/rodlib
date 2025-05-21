<nav class="h-16 bg-white shadow flex items-center px-6">
    <div class="flex justify-between w-full">
        <div class="flex items-center space-x-4">
            <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="flex items-center space-x-4">
            @guest
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Login</a>
                <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900">Register</a>
            @else
                <div class="relative inline-block text-left">
                    <button id="user-menu-button" type="button" class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50" aria-expanded="true" aria-haspopup="true">
                        {{ Auth::user()->name }}
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="user-dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.getElementById('user-menu-button');
            const menu = document.getElementById('user-dropdown-menu');
            if (button) {
                button.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
                document.addEventListener('click', e => {
                    if (!button.contains(e.target) && !menu.contains(e.target)) {
                        menu.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</nav>
