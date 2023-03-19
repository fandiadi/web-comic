@extends('layouts.main')

@section('container')
@include('partials.web.background-image')

{{-- @dd($chapter) --}}
{{-- @dump($genres) --}}
{{-- Start All Content Grid --}}
<div class="container relative">
    <div class="grid grid-row-col mini:grid-cols-1 sm:grid-cols-3 mini:gap-3 sm:gap-4 pt-4">
        {{-- Start Card Comic --}}
        <div class="bg-box text-darktextprimary rounded-lg shadow-lg max-w-full p-1 mini:col-span-3 lg:col-span-2">
            <div class="p-2 max-w-fit mini:text-[12px] lg:text-sm breadcrumbs mb-2">
                <a href="/">Home</a> >
                <a href="{{ $post->comic->slug }}">{{ $post->comic->title }}</a>
            </div>
            <h1 class="mini:font-medium mini:text-center pb-3">{{ $post->comic->title }}</h1>
            <div class="flex max-w-full justify-center mb-2">
                <img class="card-comic xl:w-44 xl:h-52" src="/storage/comic-cover/{{ $post->comic->image_cover }}" alt="{{ $post->comic->title }}">
            </div>
            <h1 class="text-sm mini:text-center">Followed by 1000 people</h1>
            <div class="flex items-center justify-center">
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">4.95 out of 5</p>
            </div>
            <div class="flex justify-center">
                <button class="bg-button flex gap-2 text-textprimary justify-center items-center px-5 py-1 rounded-lg hover:scale-110" href="#">
                    <img src="img/bookmark-white.png" class="h-5 w-5" alt="bookmark">
                    <span>Bookmark</span>
                </button>
            </div>
            <p class="py-2 px-3 text-justify">{{ $post->comic->synopsis }}</p>
            <table class="table-auto p-1 border-separate border-spacing-x-1">
                <tbody>
                    <tr>
                        <th>Status</th>
                        <td>ASD</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>AS</td>
                    </tr>
                    <tr>
                        <th>Authors</th>
                        <td>ASD</td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        @foreach ($genres as $genre)
                            <td class="border w-fit">{{ $genre->slug_genre }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th>Release</th>
                        <td>17 april 2020</td>
                    </tr>
                    <tr>
                        <th>Posted by</th>
                        <td>Kurma</td>
                    </tr>
                    <tr>
                        <th>Posted on</th>
                        <td>17 Agustus 2022</td>
                    </tr>
                    <tr>
                        <th>Update on</th>
                        <td>30 Agustus 2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- End Card Comic --}}
        {{-- Start New Socmed --}}
        <div class="bg-box px-1 py-1 shadow-lg rounded-md flex flex-wrap mini:row-start-6 mini:col-span-3 lg:col-span-1 lg:row-start-2 lg:col-start-3 lg:self-start">
            @include('sections.others.socmed')
        </div>
        {{-- End New Socmed --}}
        {{-- Start Info Gallery Comic --}}
        <div class="bg-box px-0 py-0 shadow-lg rounded-md col-span-3 lg:col-span-2">
            <div class="w-full px-4 bg-primary rounded-t-lg p-1">
                <div class="flex justify-start w-full bg-primary rounded-t-lg p-1">
                    <button href="#" class="text-md shadow-md hidden text-white">Sinopsis</button>
                    <button href="#" class="text-md text-white">Gallery</button>
                </div>
            </div>
            <div class="flex flex-wrap mini:max-h-80 mini:justify-center md:px-2 py-3 overflow-y-auto">
                {{-- Box Chapter --}}
                <div class="h-max w-full flex rounded-lg px-1 gap-3 snap-start md:justify-center xl:gap-5">
                    @foreach ($gallerys as $gallery)
                    @if (empty($gallery))
                        <h1 class="text-sm">Empty</h1>
                    @endif
                        <img class="comic-card xl:w-36 xl:h-44" src="/storage/comic-cover/gallery/{{ $gallery->slug_comic }}/{{ $gallery->path }}" alt="image">
                    @endforeach
                </div>
            </div>
            {{-- @dump($gallerys[0]) --}}
        </div>
        {{-- End Info Gallery Comic --}}
        {{-- Start Chapter --}}
        <div class="bg-box px-0 py-0 shadow-lg rounded-md col-span-3 lg:col-span-2">
            <div class="w-full px-4 bg-primary rounded-t-lg p-1">
                <div class="flex justify-between w-full bg-primary rounded-t-lg p-1">
                    <a href="#" class="text-white">Judul komik</a>
                    <!-- Component Search Chapter -->
                    <div class='max-w-md'>
                        <div class="relative flex items-center w-full h-6 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                            <div class="grid place-items-center h-full w-12 text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            <input
                            class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                            type="text"
                            id="search"
                            placeholder="Search chapter.." />
                        </div>
                    </div>
                    <!-- End Component Search Chapter -->
                </div>
            </div>
            <div class="flex flex-wrap mini:max-h-80 mini:justify-center gap-2 md:px-2 py-3 overflow-y-auto">
                {{-- Box Chapter --}}
                @isset($chapters)
                    @foreach ($chapters as $chapter )
                    <a href="/{{ $chapter->slug_chapter }}"><div class="bg-buttonhover text-textprimary rounded-lg p-1 shadow-md hover:text-texthover">
                        <h2 class="text-sm">Chapter {{ $chapter->chapter }}</h2>
                        <h2 class="text-sm">{{ $chapter->created_at->diffForHumans() }}</h2>
                    </div></a>
                    @endforeach
                @endisset
            </div>
        </div>
        {{-- End Chapter --}}
        {{-- Start Maybe you like --}}
        <div class="bg-box px-0 py-0 shadow-lg rounded-md col-span-3 lg:col-span-2">
            <div class="w-full px-4 bg-primary rounded-t-lg p-1">
                <div class="flex justify-between w-full bg-primary rounded-t-lg p-1">
                    <a href="#" class="text-white">Maybe you like</a>
                </div>
            </div>
            <div class="flex flex-wrap justify-center mini:space-x-3 hover:mb-5 hover:mt-3">
                <div class="py-1 mt-1 lg:hover:scale-125">
                    <img class="w-28 h-36 rounded-sm shadow-md xl:w-32 xl:h-40" src="https://source.unsplash.com/400x600?comic" alt="image">
                    <h2 class="text-sm">Judul asldkalskd...</h2>
                    <h2 class="text-sm">Chapter</h2>
                </div>
                <div class="py-1 mt-1 lg:hover:scale-125">
                    <img class="w-28 h-36 rounded-sm shadow-md xl:w-32 xl:h-40" src="https://source.unsplash.com/400x600?comic" alt="image">
                    <h2 class="text-sm">Judul asldkalskd...</h2>
                    <h2 class="text-sm">Chapter</h2>
                </div>
                <div class="py-1 mt-1 lg:hover:scale-125">
                    <img class="w-28 h-36 rounded-sm shadow-md xl:w-32 xl:h-40" src="https://source.unsplash.com/400x600?comic" alt="image">
                    <h2 class="text-sm">Judul asldkalskd...</h2>
                    <h2 class="text-sm">Chapter</h2>
                </div>
                <div class="py-1 mt-1 lg:hover:scale-125">
                    <img class="w-28 h-36 rounded-sm shadow-md xl:w-32 xl:h-40" src="https://source.unsplash.com/400x600?comic" alt="image">
                    <h2 class="text-sm">Judul asldkalskd...</h2>
                    <h2 class="text-sm">Chapter</h2>
                </div>
                <div class="py-1 mt-1 lg:hover:scale-125">
                    <img class="w-28 h-36 rounded-sm shadow-md xl:w-32 xl:h-40" src="https://source.unsplash.com/400x600?comic" alt="image">
                    <h2 class="text-sm">Judul asldkalskd...</h2>
                    <h2 class="text-sm">Chapter</h2>
                </div>
                <div class="py-1 mt-1 lg:hover:scale-125">
                    <img class="w-28 h-36 rounded-sm shadow-md xl:w-32 xl:h-40" src="https://source.unsplash.com/400x600?comic" alt="image">
                    <h2 class="text-sm">Judul asldkalskd...</h2>
                    <h2 class="text-sm">Chapter</h2>
                </div>
            </div>
        </div>
        {{-- End Maybe you like --}}
        {{-- Start New Chitchat --}}
        <div class="bg-box px-1 py-1 shadow-lg rounded-md flex flex-wrap mini:col-span-3 lg:col-span-1 lg:row-start-1 lg:col-start-3">
            @include('sections.others.chitchat')
        </div>
        {{-- End New Chitchat --}}
        {{-- Start New Advertisement --}}
        <div class="bg-box px-10 py-10 shadow-lg rounded-md mini:row-start-2 mini:col-span-3 lg:col-span-2">
            @include('sections.others.adverts1')
        </div>
        {{-- End New Advertisement --}}
        {{-- Start New Advertisement 2 --}}
        <div class="bg-box px-1 py-1 shadow-lg rounded-md mini:col-span-3 lg:col-span-1 lg:row-start-3 lg:col-start-3 self-start">
            @include('sections.others.adverts2')
        </div>
        {{-- End New Advertisement 2 --}}

        {{-- Start Comment --}}
        <div class="bg-box px-1 py-2 shadow-lg mini:col-span-3 lg:col-span-2 mt-5 lg:mt-10">
            <h1>kolom comment</h1>
        </div>
        {{-- End Comment --}}

    </div>
</div>
{{-- Start All Content Grid --}}

<div class="mt-40"></div>
@endsection
