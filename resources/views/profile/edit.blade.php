<x-app-layout>
    <div class="py-12 bg-blue-950 h-auto">
        <div class="flex flex-row flex-nowrap justify-evenly">
            <div class="w-1/4">
                <div class="w-auto h-auto p-4 bg-zinc-200 rounded-lg my-5">
                    <!-- Header com imagem de fundo e foto de perfil -->
                    <div class="relative bg-green-200 h-32 flex justify-start items-center"
                        style="background-image: url('https://www.toptal.com/designers/subtlepatterns/patterns/pattern.svg'); background-size: cover;">
                        <!-- Foto de perfil com ícone de edição -->
                        <div class="relative">
                            <img class="ml-2 mt-12 w-28 h-28 border-4 border-white object-cover absolute-bottom-12"
                                src="https://via.placeholder.com/150" alt="Foto de perfil">
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
                        <h2 class="text-3xl font-semibold text-gray-900">Brenda Oliveira</h2>
                        <p class="text-lg text-gray-500">Desde janeiro de 2024</p>
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
                        <div class="bg-blue-950 text-white rounded-lg p-2 w-20">
                            <p class="text-xl font-semibold text-green-400">26</p>
                            <p class="text-sm text-green-400">seguidores</p>
                        </div>
                        <div class="bg-blue-950 text-white rounded-lg p-2 w-20">
                            <p class="text-xl font-semibold text-green-400">30</p>
                            <p class="text-sm text-green-400">seguindo</p>
                        </div>
                        <div class="bg-blue-950 text-white rounded-lg p-2 w-20">
                            <p class="text-xl font-semibold text-green-400">4</p>
                            <p class="text-sm text-green-400">artigos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" w-1/2 flex flex-col">
                <div class="p-4 bg-zinc-200 rounded-lg my-5">
                    <section>
                        <header>
                            <h2 class="text-2xl text-black">
                                {{ __('Suas Publicações') }}
                            </h2>
                        </header>

                        <div class="flex flex-column my-2">
                            <svg width="40" height="40" viewBox="40 0 50 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="40.5" y="0.5" width="39" height="39" rx="9.5" stroke="#121E69" />
                                <path
                                    d="M51 20.9844V19.0156H69V20.9844H51ZM51 14H69V16.0156H51V14ZM51 26V23.9844H63V26H51Z"
                                    fill="#121E69" />
                            </svg>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Artigos') }}
                            </p>
                        </div>

                        <div class="flex flex-column my-2">
                            <svg width="40" height="40" viewBox="0 0 50 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" stroke="#121E69" />
                                <path
                                    d="M11 17.9844V20H22.0156V17.9844H11ZM11 16.0156V14H22.0156V16.0156H11ZM11 23.9844V22.0156H17.9844V23.9844H11ZM26 20.8906L28.1094 23L28.8594 22.2969C29.0469 22.0781 29.1406 21.8438 29.1406 21.5938C29.1406 21.3125 29.0469 21.0781 28.8594 20.8906L28.1094 20.1406C27.9219 19.9531 27.6875 19.8594 27.4062 19.8594C27.1562 19.8594 26.9219 19.9531 26.7031 20.1406L26 20.8906ZM25.2969 21.5938L27.4062 23.7031L22.1094 29H20V26.8906L25.2969 21.5938Z"
                                    fill="#121E69" />
                            </svg>


                            <p class="mt-1 text-lg text-black">
                                {{ __('Escrever novo artigo') }}
                            </p>
                        </div>

                    </section>
                </div>

                <div class="p-4 bg-zinc-200 rounded-lg my-5">
                    <section>
                        <header>
                            <h2 class="text-2xl text-black">
                                {{ __('Sua Atividade') }}
                            </h2>
                        </header>

                        <div class="flex flex-column my-2">
                            <svg width="40" height="40" viewBox="0 0 50 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" stroke="#121E69" />
                                <path
                                    d="M20 29.3281L18.5469 28.0156C16.8906 26.5156 15.6875 25.4062 14.9375 24.6875C14.1875 23.9688 13.3438 23.0781 12.4062 22.0156C11.5 20.9531 10.875 20 10.5312 19.1562C10.1875 18.2812 10.0156 17.3906 10.0156 16.4844C10.0156 14.9531 10.5312 13.6562 11.5625 12.5938C12.625 11.5312 13.9375 11 15.5 11C17.3125 11 18.8125 11.7031 20 13.1094C21.1875 11.7031 22.6875 11 24.5 11C26.0625 11 27.3594 11.5312 28.3906 12.5938C29.4531 13.6562 29.9844 14.9531 29.9844 16.4844C29.9844 17.7031 29.5781 18.9688 28.7656 20.2812C27.9531 21.5938 27.0625 22.7344 26.0938 23.7031C25.1562 24.6719 23.6094 26.125 21.4531 28.0625L20 29.3281Z"
                                    fill="#121E69" />
                            </svg>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Favoritos') }}
                            </p>
                        </div>

                        <div class="flex flex-column my-2">
                            <svg width="40" height="40" viewBox="0 0 50 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" stroke="#121E69" />
                                <path
                                    d="M11 17.9844V20H22.0156V17.9844H11ZM11 16.0156V14H22.0156V16.0156H11ZM11 23.9844V22.0156H17.9844V23.9844H11ZM26 20.8906L28.1094 23L28.8594 22.2969C29.0469 22.0781 29.1406 21.8438 29.1406 21.5938C29.1406 21.3125 29.0469 21.0781 28.8594 20.8906L28.1094 20.1406C27.9219 19.9531 27.6875 19.8594 27.4062 19.8594C27.1562 19.8594 26.9219 19.9531 26.7031 20.1406L26 20.8906ZM25.2969 21.5938L27.4062 23.7031L22.1094 29H20V26.8906L25.2969 21.5938Z"
                                    fill="#121E69" />
                            </svg>


                            <p class="mt-1 text-lg text-black">
                                {{ __('Seguindo') }}
                            </p>
                        </div>

                    </section>
                </div>

                <div class="p-4 bg-zinc-200 rounded-lg my-5">
                    <section>
                        <header>
                            <h2 class="text-2xl text-black">
                                {{ __('Configurações') }}
                            </h2>
                        </header>
                        <div class="flex flex-column my-2">
                            <svg width="40" height="40" viewBox="40 0 50 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="40.5" y="0.5" width="39" height="39" rx="9.5" stroke="#121E69" />
                                <path
                                    d="M51 20.9844V19.0156H69V20.9844H51ZM51 14H69V16.0156H51V14ZM51 26V23.9844H63V26H51Z"
                                    fill="#121E69" />
                            </svg>

                            <p class="mt-1 text-lg text-black">
                                {{ __('Alterar senha') }}
                            </p>
                        </div>

                        <div class="flex flex-column my-2">
                            <svg width="40" height="40" viewBox="0 0 50 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="39" height="39" rx="9.5"
                                    stroke="#121E69" />
                                <path
                                    d="M11 17.9844V20H22.0156V17.9844H11ZM11 16.0156V14H22.0156V16.0156H11ZM11 23.9844V22.0156H17.9844V23.9844H11ZM26 20.8906L28.1094 23L28.8594 22.2969C29.0469 22.0781 29.1406 21.8438 29.1406 21.5938C29.1406 21.3125 29.0469 21.0781 28.8594 20.8906L28.1094 20.1406C27.9219 19.9531 27.6875 19.8594 27.4062 19.8594C27.1562 19.8594 26.9219 19.9531 26.7031 20.1406L26 20.8906ZM25.2969 21.5938L27.4062 23.7031L22.1094 29H20V26.8906L25.2969 21.5938Z"
                                    fill="#121E69" />
                            </svg>


                            <p class="mt-1 text-lg text-black">
                                {{ __('Deletar usuário') }}
                            </p>
                        </div>

                    </section>
                </div>

                <div class="flex justify-end">
                    <svg width="100" height="97" viewBox="0 0 100 97" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_844_511)">
                            <rect x="14" y="4" width="72" height="69" rx="16" fill="#DCE3EE"
                                shape-rendering="crispEdges" />
                            <rect x="30" y="20" width="40" height="40" rx="10" fill="#121E69" />
                            <path
                                d="M41.9844 33.0156V46.9844H50V49H41.9844C41.4531 49 40.9844 48.7969 40.5781 48.3906C40.2031 47.9844 40.0156 47.5156 40.0156 46.9844V33.0156C40.0156 32.4844 40.2031 32.0156 40.5781 31.6094C40.9844 31.2031 41.4531 31 41.9844 31H50V33.0156H41.9844ZM55.0156 34.9844L59.9844 40L55.0156 45.0156L53.6094 43.5625L56.1875 40.9844H46.0156V39.0156H56.1875L53.6094 36.3906L55.0156 34.9844Z"
                                fill="#9BE43E" />
                        </g>
                        <defs>
                            <filter id="filter0_d_844_511" x="0" y="0" width="100" height="97"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="10" />
                                <feGaussianBlur stdDeviation="7" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_844_511" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_844_511"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
