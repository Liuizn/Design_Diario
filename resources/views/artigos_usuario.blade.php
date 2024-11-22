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

    <h2 style="background-color: #9BE43E;" class="text-lg italic px-4 py-1 rounded-r-lg inline-block">Publicados</h2>

    <!-- Publicados -->
    <section class="px-8 py-8">
        <div class="grid grid-cols-4 gap-12">
            <!-- Cartão 1 -->
            <div class="rounded-xl overflow-hidden relative">
                {{-- Imagem --}}
                <img src="{{ asset('images/publicado_4.svg') }}" alt="Imagem 2" class="w-full h-48 object-cover">

                <div class="absolute top-8 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">share</span>
                </div>

                <div class="absolute top-20 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">edit</span>
                </div>

                <div class="absolute top-32 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">delete</span>
                </div>

                <h3 class="text-lg text-gray-700 my-1">Tendências de Cores para 2024</h3>

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
            </div>

            <!-- Cartão 2 -->
            <div class="rounded-xl overflow-hidden relative">
                {{-- Imagem --}}
                <img src="{{ asset('images/publicado_2.svg') }}" alt="Imagem 2" class="w-full h-48 object-cover">

                <div class="absolute top-8 right-2 flex flex-row border rounded-lg border-white border-2">
                    <span class="p-1 text-white material-symbols-outlined">share</span>
                </div>

                <div class="absolute top-20 right-2 flex flex-row border rounded-lg border-white border-2">
                    <span class="p-1 text-white material-symbols-outlined">edit</span>
                </div>

                <div class="absolute top-32 right-2 flex flex-row border rounded-lg border-white border-2">
                    <span class="p-1 text-white material-symbols-outlined">delete</span>
                </div>

                <h3 class="text-lg text-gray-700 my-1">Tendências de Cores para 2024</h3>

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
            </div>

            <!-- Cartão 3 -->
            <div class="rounded-xl overflow-hidden relative">
                {{-- Imagem --}}
                <img src="{{ asset('images/publicado_3.svg') }}" alt="Imagem 2" class="w-full h-48 object-cover">

                <div class="absolute top-8 right-2 flex flex-row border rounded-lg border-white border-2">
                    <span class="p-1 text-white material-symbols-outlined">share</span>
                </div>

                <div class="absolute top-20 right-2 flex flex-row border rounded-lg border-white border-2">
                    <span class="p-1 text-white material-symbols-outlined">edit</span>
                </div>

                <div class="absolute top-32 right-2 flex flex-row border rounded-lg border-white border-2">
                    <span class="p-1 text-white material-symbols-outlined">delete</span>
                </div>

                <h3 class="text-lg text-gray-700 my-1">Tendências de Cores para 2024</h3>

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
            </div>

            <!-- Cartão 4 -->
            <div class="rounded-xl overflow-hidden relative">
                {{-- Imagem --}}
                <img src="{{ asset('images/publicado_4.svg') }}" alt="Imagem 2" class="w-full h-48 object-cover">

                <div class="absolute top-8 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">share</span>
                </div>

                <div class="absolute top-20 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">edit</span>
                </div>

                <div class="absolute top-32 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">delete</span>
                </div>

                <h3 class="text-lg text-gray-700 my-1">Tendências de Cores para 2024</h3>

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
            </div>
        </div>
    </section>

    <h2 style="background-color: #9BE43E;" class="text-lg italic px-4 py-1 rounded-r-lg inline-block">Rascunhos</h2>

    <!-- Rascunhos -->
    <section class="px-8 py-8">
        <div class="grid grid-cols-4 gap-12">
            <div class="rounded-xl overflow-hidden relative">
                {{-- Imagem --}}
                <img src="{{ asset('images/publicado_4.svg') }}" alt="Imagem 2" class="w-full h-48 object-cover">

                <div class="absolute top-8 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">share</span>
                </div>

                <div class="absolute top-20 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">edit</span>
                </div>

                <div class="absolute top-32 right-2 flex flex-row border rounded-lg border-black border-2">
                    <span class="p-1 material-symbols-outlined">delete</span>
                </div>

                <h3 class="text-lg text-gray-700 my-1">Tendências de Cores para 2024</h3>

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
            </div>
        </div>
    </section>
</x-app-layout>
