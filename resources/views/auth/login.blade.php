<x-guest-layout>
    <!-- Imagem de fundo -->
    <img src="{{ asset('images/login.svg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover -z-10">

    <!-- Logo no canto superior esquerdo -->
    <div class="absolute top-4 left-4">
        <a href="/">
            <x-application-logo class="w-16 h-16 fill-current text-white" />
        </a>
    </div>

    <!-- Formulário alinhado à direita -->
    <div class="absolute inset-0 flex items-center justify-end px-8">
        <!-- Formulário com tamanho ajustado e alinhado à direita -->
        <div class="w-full max-w-lg bg-white shadow-lg rounded-lg px-8 py-8">
            <h2 class="text-3xl font-bold text-gray-700 text-center mb-6">Bem-vindo de volta!</h2>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label class="block text-sm font-medium text-gray-600" for="email" :value="__('Email')" />
                    <x-text-input id="email"
                        class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Senha -->
                <div>
                    <x-input-label class="block text-sm font-medium text-gray-600" for="password" :value="__('Senha')" />
                    <x-text-input id="password"
                        class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Esqueceu a senha -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                        Esqueceu a senha?
                    </a>
                </div>

                <!-- Botão de Login -->
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md shadow-sm hover:bg-indigo-500">
                    Entrar
                </button>
            </form>

            <!-- Links Adicionais -->
            <p class="mt-4 text-sm text-center text-gray-600">
                Não possui uma conta? <a href="{{ route('register') }}"
                    class="text-indigo-600 hover:underline">Registre-se aqui.</a>
            </p>

            <!-- Login Social -->
            <div class="mt-8 flex justify-center space-x-6">
                <!-- Google Login -->
                <button
                    class="px-6 py-3 border border-gray-300 rounded-md shadow-sm text-gray-600 hover:bg-gray-100 flex items-center">
                    <img src="{{ asset('images/logo-google.svg') }}" alt="Google Logo" class="w-5 h-5 mr-2">
                    Google
                </button>
                <!-- Apple Login -->
                <button
                    class="px-6 py-3 border border-gray-300 rounded-md shadow-sm text-gray-600 hover:bg-gray-100 flex items-center">
                    <img src="{{ asset('images/logo-apple.svg') }}" alt="Apple Logo" class="w-5 h-5 mr-2">
                    Apple
                </button>
            </div>
        </div>
    </div>
</x-guest-layout>
