<x-guest-layout>
    <!-- Imagem de fundo -->
    <img src="{{ asset('images/cadastro.svg') }}" alt="Background"
        class="absolute inset-0 w-full h-full object-cover -z-10">

    <!-- Logo no canto superior esquerdo -->
    <div class="absolute top-4 left-4">
        <a href="/">
            <x-application-logo class="w-16 h-16 fill-current text-white" />
        </a>
    </div>

    <!-- Formulário alinhado à direita -->
    <div class="absolute inset-0 flex items-center justify-end px-8">
        <!-- Formulário com tamanho ajustado -->
        <div class="w-full max-w-lg bg-white shadow-lg rounded-lg px-8 py-8">
            <h2 class="text-3xl font-bold text-gray-700 text-center mb-6">Crie uma conta</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Campo Nome com tamanho ajustado -->
                <div>
                    <x-input-label class="block text-sm font-medium text-gray-600" for="name" :value="__('Nome')" />

                    <x-text-input id="name"
                        class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label class="block text-sm font-medium text-gray-600" for="email" :value="__('Email')" />

                    <x-text-input
                        class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        id="email" type="email" name="email" :value="old('email')" required
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <!-- Senha -->
                <div>
                    <x-input-label class="block text-sm font-medium text-gray-600" for="password" :value="__('Senha')" />

                    <x-text-input id="password"
                        class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirmação de Senha -->
                <div>
                    <x-input-label class="block text-sm font-medium text-gray-600" for="password_confirmation"
                        :value="__('Confirmar Senha')" />

                    <x-text-input id="password_confirmation"
                        class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Checkbox de termos de uso -->
                <div class="flex items-start">
                    <input id="terms" name="terms" type="checkbox" required
                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <label for="terms" class="ml-2 text-sm text-gray-600">
                        Eu li e concordo com os <a href="#" class="text-indigo-600 hover:underline">Termos de
                            Uso</a>.
                    </label>
                </div>

                <!-- Botão de registro -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button
                        class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md shadow-sm hover:bg-indigo-500">
                        {{ __('Criar Conta') }}
                    </x-primary-button>
                </div>


            </form>

            <p class="mt-4 text-sm text-center text-gray-600">
                Já possui uma conta? <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Faça login
                    aqui.</a>
            </p>

            <!-- Login social -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">Ou registre-se com</p>
                <div class="flex justify-center space-x-4 mt-4">
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
    </div>
</x-guest-layout>
