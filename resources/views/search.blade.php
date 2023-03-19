@extends('layouts.main')

@section('container')
{{-- Start All Content Grid --}}
<div class="container relative">
    <div class="grid grid-row-col mini:grid-cols-1 sm:grid-cols-3 mini:gap-3 sm:gap-4 pt-4">
        {{-- Start Card Comic --}}
        <div class="bg-box px-0 py-0 text-darktextprimary rounded-lg shadow-lg max-w-full p-1 mini:col-span-3 lg:col-span-2">
            <div class="w-full px-4 bg-primary rounded-t-lg p-2">
                <h1 class="text-textprimary">Search</h1>
            </div>
            <div class="p-3 border-b-2">
                <div class="">
                <form action="/search" method="GET">
                    {{-- CheckBox Genre --}}
                    <button id="SearchButtonGenre" data-dropdown-toggle="dropdownSearchGenre" class="inline-flex items-center px-4 py-2 text-sm font-normal text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Genre <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownSearchGenre" class="z-10 hidden bg-white rounded-lg shadow w-[150px] dark:bg-gray-700">
                        <div class="p-2">
                            <label for="input-group-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Genre">
                            </div>
                        </div>
                        <ul class="flex flex-col h-80 px-2 justify-start pb-2 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="SearchButtonGenre">
                            {{-- @dd($posts[1]->slug) --}}
                            @foreach ($genres as $genre )
                            <li class="w-full items-stretch">
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <input id="genre-{{ $genre->slug }}" name="genre" type="checkbox" value="{{ $genre->slug }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="genre-{{ $genre->slug }}" name="genre" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $genre->name }}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- End Checkbox Genre --}}
                    {{-- CheckBox Type --}}
                    <button id="SearchButtonType" data-dropdown-toggle="dropdownSearchType" class="inline-flex items-center px-4 py-2 text-sm font-normal text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Type <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownSearchType" class="z-10 hidden bg-white rounded-lg shadow w-75 dark:bg-gray-700">
                        <div class="p-3">
                        <label for="input-group-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Type">
                        </div>
                        </div>
                        <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="SearchButtonType">
                            @foreach ($types as $type)
                            <li class="w-full">
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <input id="type-{{ $type->slug }}" name="type" type="checkbox" value="{{ $type->slug }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="type-{{ $type->slug }}" name="type" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $type->name }}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- End Checkbox Type --}}

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                </form>
                </div>

            </div>

            {{-- Start Card Comic --}}
            <div class="p-2">
                {{-- <h1>{{ $searchData }}</h1> --}}
                @foreach ($posts as $post)
                    <div>
                        <h1>comic {{ $post->title }}</h1>
                    </div>
                @endforeach
                <h1>asd</h1>
                <h1>asd</h1>
                @dd($posts)
            </div>
            {{-- End Card Comic --}}

        </div>
        {{-- End Card Comic --}}
        {{-- Start New Socmed --}}
        <div class="bg-box px-1 py-1 shadow-lg rounded-md flex flex-wrap mini:row-start-6 mini:col-span-3 lg:col-span-1 lg:row-start-2 lg:col-start-3 lg:self-start">
            @include('sections.others.socmed')
        </div>
        {{-- End New Socmed --}}
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

    </div>
</div>
{{-- Start All Content Grid --}}


{{-- @dump($posts[1]->title) --}}
<div class="mt-40"></div>
@endsection
