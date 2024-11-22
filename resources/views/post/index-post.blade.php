<x-app-layout>
    <div class="px-8 py-8 flex flex-column">
        <!-- Foto de Perfil -->
        <div>
            <img class="w-32 h-32 border-4 rounded-xl" src="{{ asset('images/foto_perfil.svg') }}" alt="Foto de perfil">
        </div>

        <!-- Contadores -->
        <div class="flex flex-col justify-evenly mx-5">
            <!-- Likes -->
            <div class="flex flex-column items-center">
                <span class="mx-2 block text-2xl font-bold text-gray-700">6</span>
                <span class="mx-2 material-symbols-outlined">favorite</span>
            </div>
            <!-- Comentários -->
            <div class="flex flex-column items-center">
                <span class="mx-2 block text-2xl font-bold text-gray-700">4</span>
                <span class="mx-2 material-symbols-outlined">comment</span>
            </div>
        </div>
    </div>

    <!-- Mensagem de sucesso -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2 style="background-color: #9BE43E;" class="text-lg italic px-4 py-1 rounded-r-lg inline-block">Publicados</h2>

    <!-- Publicados -->
    <section class="px-36 py-8">

        @if ($posts->isEmpty())
            <p>Não há posts disponíveis.</p>
        @else
            <div class="grid grid-cols-4 gap-12">
                @foreach ($posts as $post)
                    <div class="rounded-xl overflow-hidden relative">
                        <a href="{{ route('posts.show', $post->id) }}">
                            @if ($post->imagem)
                                <img src="{{ asset('storage/' . $post->imagem) }}" alt="Imagem do Post"
                                    class="w-full h-48 object-cover">

                                <div
                                    class="absolute inset-0 bg-gradient-to-l from-blue-950 h-48 via-transparent to-transparent">
                                </div>
                            @endif

                            <div class="absolute top-8 right-2 flex flex-row border rounded-lg border-white border-2">
                                <span class="p-1 text-white material-symbols-outlined">share</span>
                            </div>

                            <div class="absolute top-20 right-2 flex flex-row border rounded-lg border-white border-2">
                                <a href="{{ route('posts.edit', $post->id) }}" class="edit-button"><span
                                        class="p-1 text-white material-symbols-outlined">edit</span></a>
                            </div>

                            <div class="absolute top-32 right-2 flex flex-row border rounded-lg border-white border-2">
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="delete-button"
                                        onclick="return confirm('Tem certeza que deseja deletar este post?')"><span
                                            class="p-1 text-white material-symbols-outlined">delete</span></button>
                                </form>
                            </div>

                            <h3 class="text-lg text-gray-700 my-1">{{ strip_tags($post->titulo) }}</h3>

                            <div class="flex flex-row">
                                <!-- Likes -->
                                <div class="flex">
                                    <span class="mx-1 block text-lg font-bold text-gray-700">6</span>
                                    <span class="mx-1 text-lg material-symbols-outlined">favorite</span>
                                </div>
                                <!-- Comentários -->
                                <div class="flex">
                                    <span class="mx-1 block text-lg font-bold text-gray-700">4</span>
                                    <span class="mx-1 text-lg material-symbols-outlined">comment</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    <h2 style="background-color: #9BE43E;" class="text-lg italic px-4 py-1 rounded-r-lg inline-block">Rascunhos</h2>

    <!-- Rascunhos -->
    <section class="px-8 py-8">
        <div class="grid grid-cols-4 gap-12">
            @foreach ($rascunhos as $post)
                <div class="rounded-xl overflow-hidden relative">
                    <a href="{{ route('posts.show', $post->id) }}">
                        @if ($post->imagem)
                            <img src="{{ asset('storage/' . $post->imagem) }}" alt="Imagem do Post"
                                class="w-full h-48 object-cover">

                            <div
                                class="absolute inset-0 bg-gradient-to-l from-blue-950 h-48 via-transparent to-transparent">
                            </div>
                        @endif

                        <div class="absolute top-8 right-2 flex flex-row border rounded-lg border-white border-2">
                            <span class="p-1 text-white material-symbols-outlined">share</span>
                        </div>

                        <div class="absolute top-20 right-2 flex flex-row border rounded-lg border-white border-2">
                            <a href="{{ route('posts.edit', $post->id) }}" class="edit-button"><span
                                    class="p-1 text-white material-symbols-outlined">edit</span></a>
                        </div>

                        <div class="absolute top-32 right-2 flex flex-row border rounded-lg border-white border-2">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="delete-button"
                                    onclick="return confirm('Tem certeza que deseja deletar este post?')"><span
                                        class="p-1 text-white material-symbols-outlined">delete</span></button>
                            </form>
                        </div>

                        <h3 class="text-lg text-gray-700 my-1">{{ strip_tags($post->titulo) }}</h3>

                        <div class="flex flex-row">
                            <!-- Likes -->
                            <div class="flex">
                                <span class="mx-1 block text-lg font-bold text-gray-700">6</span>
                                <span class="mx-1 text-lg material-symbols-outlined">favorite</span>
                            </div>
                            <!-- Comentários -->
                            <div class="flex">
                                <span class="mx-1 block text-lg font-bold text-gray-700">4</span>
                                <span class="mx-1 text-lg material-symbols-outlined">comment</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
