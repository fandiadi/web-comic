<div class="flex justify-between w-full px-4 bg-primary rounded-t-lg p-1">
    <a href="#" class="font-semibold shadow-md text-textprimary hover:text-texthover">New Project</a>
    <a href="#" class="font-semibold shadow-md text-textprimary hover:text-texthover">Read More>></a>
</div>
<div class="flex flex-wrap justify-center text-darktextprimary mini:space-x-3">

    @foreach ($projects as $project)
    <div class="group/comic py-1 mt-1">
        <div class="relative">
            <a href=""><img class="card-comic hover:brightness-50" src="https://source.unsplash.com/400x600?comic" alt="image"></a>
            <span class="card-flag fi fi-{{ $project->comic->type->code }}"></span>
        </div>
        <a href="{{ $project->comic->slug }}"><h2 class="group-hover/comic:text-texthover text-sm font-semibold">{{ $project->comic->title }}</h2></a>
        <a href="{{ $project->slug_chapter }}"><h2 class="text-xs hover:text-texthover">Chapter {{ $project->chapter }}</h2></a>
        <h2 class="mini:text-center xl:text-start">⭐⭐⭐⭐</h2>
    </div>
    @endforeach

</div>
