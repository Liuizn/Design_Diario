<div class="flex flex-column text-white" style="width: 750px;">
    <div class="flex flex-row align-center space-between">
        <div class="flex flex-column justify-center mr-5">
            <img src="{{ asset('images/popular-curved-text.png') }}" class="object-contain" style="width: 180px; height: 180px;">
            <img src="{{ $authorProfilePic }}" class="object-cover rounded-full" style="width: 80px; height: 80px; margin-top: 50px; position: absolute;">
        </div>
        <div class="flex flex-col align-center w-fit pt-4">
            <div>
                <span class="font-bold text-2xl">{{ $authorName }}</span>
            </div>
            <div>
                <span>{{ $authorDescription }}</span>
            </div>
            <div class="flex flex-row align-center justify-between mt-4">
                <div>
                    <a href="{{ $authorProfileLink }}">
                        <button class="border-2 border-lime-300 text-white bg-transparent px-4 py-2 pl-7 pr-7 rounded-lg transition-all duration-300 hover:bg-lime-300 hover:text-white">Ver Perfil</button>
                    </a>
                </div>
                <div class="flex flex-row align-center justify-between pt-1" style="width: 300px;">
                    <span>{{ $authorFollowersData }} seguidores</span>
                    <span>{{ $authorVerifiedArticlesData }} artigos verificados</span>
                </div>
            </div>
        </div>
    </div>
</div>