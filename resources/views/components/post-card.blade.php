<a href="{{ $postUrl }}" class="w-auto">
    <div class="flex flex-col p-0 bg-slate-200 rounded-lg shadow-md m-3 shadow-md cursor-pointer hover:brightness-125 transition ease-in-out delay-50" style="{{ $fullWidth == 'true' ? 'width: 744px;' : 'width: auto;' }}">
        <div class="flex flex-col-reverse items-end">
            <img src="{{ $postImageCover }}" class="h-60 w-full object-cover rounded-lg brightness-50" style="{{ $fullWidth === 'true' ? 'width: 100%;' : 'width: 360px;' }}">
            <span class="absolute font-bold text-end text-white" style="margin-right: 10px; margin-bottom: 10px; max-width: 300px;">{{ $postTitle }}</span>
        </div>
        <div class="flex flex-row items-center m-3">
            <img src="{{ $authorProfilePic }}" class="h-12 w-12 rounded-full object-cover">
            <span class="italic ml-3">Por <span class="font-bold">{{ $authorName }} </span>
        </div>
    </div>
</a>