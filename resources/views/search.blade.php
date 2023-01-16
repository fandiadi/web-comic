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
                {{-- Start Label Status --}}
                <div class="dropdown">
                    <label tabindex="0" class="btn m-1 w-40">Status</label>
                    <ul tabindex="0" class="flex flex-row dropdown-content menu p-2 bg-box shadow-sm border w-40 gap-3">
                        <li><input type="checkbox" class="form-checkbox rounded" value="All" id="" name="">All</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Ongoing</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Tamat</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Hiatus</li>
                    </ul>
                </div>
                {{-- End Label Status --}}

                {{-- Start Label Type --}}
                <div class="dropdown">
                    <label tabindex="0" class="btn m-1 w-40">Type</label>
                    <ul tabindex="0" class="flex flex-row dropdown-content menu p-2 bg-box shadow-sm border w-56 gap-3">
                        <li><input type="checkbox" class="form-checkbox rounded" value="All" id="" name="">All</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Manga</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Manhua</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Manhwa</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Comic</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Novel</li>
                    </ul>
                </div>
                {{-- End Label Type --}}

                {{-- Start Label OrderBy --}}
                <div class="dropdown">
                    <label tabindex="0" class="btn m-1 w-40">Order by</label>
                    <ul tabindex="0" class="flex flex-row dropdown-content menu p-2 bg-box shadow-sm border w-64 gap-5">
                        <li><input type="checkbox" class="form-checkbox rounded" value="All" id="" name="">All</li>
                        <li><input type="checkbox" class="form-checkbox rounded">A-Z</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Z-A</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Latest Update</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Latest Added</li>
                        <li><input type="checkbox" class="form-checkbox rounded">Popular</li>
                    </ul>
                </div>
                {{-- End Label OrderBy --}}
            </div>
            {{-- Start Card Comic --}}
            <div class="p-2">
                <h1>asd</h1>
                <h1>asd</h1>
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

<div class="mt-40"></div>
@endsection
