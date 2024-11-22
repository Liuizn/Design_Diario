<nav x-data="{ open: false }"
    class="{{ in_array(Route::currentRouteName(), ['home', 'posts.create', 'posts.show']) ? 'bg-blue-950 text-white' : 'bg-lime-400 dark:bg-lime-400 border-b border-gray-100 dark:border-gray-700' }} pt-4 pb-4">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-black" />
                </a>
            </div>

            @if (Route::is('home'))
                <div class="flex flex-row flex items-center text-black">
                    <input class="bg-slate-300 p-2" placeholder="O que você está buscando?"
                        style="border-radius: 10px; width: 700px;">
                </div>
            @endif

            <!-- Navigation Links -->
            <div class="shirnk-0 flex items-center">
                <a href="{{ route('profile.edit') }}" class="font-semibold">
                    {{ __('Meu perfil') }}
                </a>

                <div>

                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                @if (Auth::check())
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @else
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">Visitante</div>
                    <div class="font-medium text-sm text-gray-500">visitante@email.com</div>
                @endif
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
