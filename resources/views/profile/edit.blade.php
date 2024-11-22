<x-app-layout>
    <div class="py-12 bg-blue-950 h-auto">
        <div class="flex flex-row flex-nowrap justify-evenly">
            <div class="w-1/4">
                <div class="w-auto h-auto p-4 bg-zinc-200 rounded-lg my-5">
                    <!-- Header com imagem de fundo e foto de perfil -->
                    <div class="relative bg-green-200 h-32 flex justify-start items-center"
                        style="background-image: url('{{ asset('images/fundo_perfil.svg') }}'); background-size: cover;">
                        <!-- Foto de perfil com ícone de edição -->
                        <div class="relative">
                            <img class="ml-2 mt-12 w-28 h-28 border-4 border-white object-cover absolute-bottom-12"
                                src="{{ asset('images/foto_perfil.svg') }}" alt="Foto de perfil">
                            <button
                                class="absolute bottom-0 right-0 bg-blue-700 text-white p-1 rounded-full transform translate-x-1/2 translate-y-1/2 hover:bg-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L4.5 12.672V15.5a1 1 0 001 1h2.828l10.086-10.086a2 2 0 000-2.828zM6 14v-1.586L13.414 5 15 6.586 7.586 14H6z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Informações do perfil -->
                    <div class="pt-12 text-left">
                        <h2 class="text-3xl font-semibold text-gray-900">{{ $user->name }}</h2>
                        <p class="text-lg text-gray-500">Desde {{ $user->created_at->format('F') }} de
                            {{ $user->created_at->format('Y') }}</p>
                        <p class="text-xl text-gray-500">Ela/Dela</p>
                        <p class="text-xl text-gray-500">Brasil</p>

                        <p class="mt-4 text-gray-700 text-xl">
                            "Sou uma estudante de Design que ama transformar ideias em arte. Apaixonada por café, cores
                            e boas conversas, estou sempre em busca de inspiração para criar experiências visuais únicas
                            e autênticas."
                        </p>
                    </div>

                    <!-- Estatísticas de seguidores, seguindo, artigos -->
                    <div class="flex justify-around mt-12 text-center">
                        <div class="bg-blue-950 text-white rounded-lg p-1 w-20">
                            <p class="text-xl font-semibold text-green-400">26</p>
                            <p class="text-sm text-green-400">seguidores</p>
                        </div>
                        <div class="bg-blue-950 text-white rounded-lg p-1 w-20">
                            <p class="text-xl font-semibold text-green-400">30</p>
                            <p class="text-sm text-green-400">seguindo</p>
                        </div>
                        <div class="bg-blue-950 text-white rounded-lg p-1 w-20">
                            <p class="text-xl font-semibold text-green-400">4</p>
                            <p class="text-sm text-green-400">artigos</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Seção de botões --}}
            <div class=" w-1/2 flex flex-col">
                {{-- Suas publicações --}}
                <div class="p-4 bg-zinc-200 rounded-lg my-5">
                    <section>
                        <header>
                            <h2 class="text-2xl text-black">
                                {{ __('Suas Publicações') }}
                            </h2>
                        </header>

                        <a href="{{ route('posts.index') }}">
                            <div class="flex flex-column my-2">
                                <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                    <span class="material-symbols-outlined px-1 text-2xl ">article</span>
                                </div>

                                <p class="mt-1 text-lg text-black">
                                    {{ __('Artigos') }}
                                </p>
                            </div>
                        </a>

                        <a href="{{ route('posts.create') }}">
                            <div class="flex flex-column my-2">
                                <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                    <span class="material-symbols-outlined px-1 text-2xl ">edit_note</span>
                                </div>

                                <p class="mt-1 text-lg text-black">
                                    {{ __('Escrever novo artigo') }}
                                </p>
                            </div>
                        </a>

                        <div class="flex flex-column my-2">
                            <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                <span class="material-symbols-outlined px-1 text-2xl ">trending_up</span>
                            </div>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Avaliação e desempenho') }}
                            </p>
                        </div>

                        <div class="flex flex-column my-2">
                            <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                <span class="material-symbols-outlined px-1 text-2xl ">verified</span>
                            </div>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Verificado de autor') }}
                            </p>
                        </div>
                    </section>
                </div>

                {{-- Sua atividade --}}
                <div class="p-4 bg-zinc-200 rounded-lg my-5">
                    <section>
                        <header>
                            <h2 class="text-2xl text-black">
                                {{ __('Sua Atividade') }}
                            </h2>
                        </header>

                        <div class="flex flex-column my-2">
                            <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                <span class="material-symbols-outlined px-1 text-2xl ">favorite</span>
                            </div>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Favoritos') }}
                            </p>
                        </div>

                        <div class="flex flex-column my-2">
                            <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                <span class="material-symbols-outlined px-1 text-2xl ">history</span>
                            </div>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Histórico de vizualizações') }}
                            </p>
                        </div>


                        <div class="flex flex-column my-2">
                            <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                <span class="material-symbols-outlined px-1 text-2xl ">chat</span>
                            </div>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Comentários') }}
                            </p>
                        </div>
                    </section>
                </div>

                {{-- Configuraçoes --}}
                <div class="p-4 bg-zinc-200 rounded-lg my-5">
                    <section>
                        <header>
                            <h2 class="text-2xl text-black">
                                {{ __('Configurações') }}
                            </h2>
                        </header>
                        <div class="flex flex-column my-2">
                            <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                <span class="material-symbols-outlined px-1 text-2xl ">password</span>
                            </div>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Alterar senha') }}
                            </p>
                        </div>

                        <div class="flex flex-column my-2">
                            <div class="border border-blue-950 flex items-center mr-2 rounded-lg">
                                <span class="material-symbols-outlined px-1 text-2xl ">attach_email</span>
                            </div>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Alterar e-mail vinculado') }}
                            </p>
                        </div>

                    </section>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="flex justify-end">
                        <div class="bg-zinc-200 rounded-lg p-2 hover:bg-violet-300">
                            <a class="flex items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"><span
                                    class="material-symbols-outlined">logout</span></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
