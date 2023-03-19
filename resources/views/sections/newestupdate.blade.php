<div class="w-full px-4 bg-primary rounded-t-lg p-1">
    <div class="w-[115px]">
        <h1 class="font-semibold shadow-md text-textprimary hover:text-texthover"><a href="#">Newest Update</a></h1>
    </div>
</div>

{{-- @dd($posts) --}}
<div class="flex flex-wrap justify-center text-darktextprimary mini:space-x-3">
    @foreach ($updates as $update)
    <div class="group/comic py-1 mt-1">
        <div class="relative">
            <a href=""><img class="card-comic hover:brightness-50" src="/storage/comic-cover/{{ $update->comic->image_cover }}" alt="{{ $update->comic->title }}"></a>
            <span class="card-flag fi fi-{{ $update->comic->type->code }}"></span>
        </div>
        <div class="w-[128px] line-clamp-2">
            <a href="/preview/{{ $update->comic->slug }}"><h2 class=" group-hover/comic:text-texthover text-sm font-semibold">{{ $update->comic->title }}</h2></a>
        </div>
        <a href="{{ $update->slug_chapter }}"><h2 class="text-xs hover:text-texthover">Chapter {{ $update->chapter }}</h2></a>
        <h2 class="mini:text-center xl:text-start">⭐⭐⭐⭐</h2>
    </div>
    @endforeach

    {{-- <h1>{{ $posts[0] }}</h1> --}}

</div>
