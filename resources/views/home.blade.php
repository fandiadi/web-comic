@extends('layouts.main')
@section('container')

@include('partials.web.background-image')

{{-- Start Most Views --}}
<section id="home" class="pt-1">
    @include('sections.mostviews')
</section>
{{-- End Most Viewed --}}

{{-- Start All Content Grid --}}
<div class="container relative">
        <div class="grid grid-row-col mini:grid-cols-1 sm:grid-cols-3 mini:gap-3 sm:gap-4 pt-4">
            {{-- Start New Project --}}
            <div class=" bg-box px-0 py-0 shadow-lg rounded-md col-span-3 lg:col-span-2 lg:row-span-2">
                @include('sections.newproject')
            </div>
            {{-- End New Project --}}
            {{-- Start New Socmed --}}
            <div class="bg-box px-1 py-1 shadow-lg rounded-md flex flex-wrap mini:row-start-4 mini:col-span-3 lg:col-span-1 lg:row-start-2 lg:col-start-3">
                @include('sections.others.socmed')
            </div>
            {{-- End New Socmed --}}
            {{-- Start New Newest Update --}}
            <div class="bg-box px-0 py-0 shadow-lg rounded-md col-span-3 lg:col-span-2">
                @include('sections.newestupdate')
            </div>
            {{-- End New Newest Update --}}
            {{-- Start New Chitchat --}}
            <div class="bg-box px-1 py-1 shadow-lg rounded-md flex flex-wrap mini:col-span-3 lg:col-span-1 lg:row-start-3 lg:col-start-3">
                @include('sections.others.chitchat')
            </div>
            {{-- End New Chitchat --}}
            {{-- Start New Advertisement --}}
            <div class="bg-box px-10 py-10 shadow-lg rounded-md mini:row-start-2 mini:col-span-3 lg:col-span-2">
                @include('sections.others.adverts1')
            </div>
            {{-- End New Advertisement --}}
            {{-- Start New Advertisement 2 --}}
            <div class="bg-box px-1 py-1 shadow-lg rounded-md mini:col-span-3 lg:col-span-1 lg:row-start-4 lg:col-start-3">
                @include('sections.others.adverts2')
            </div>
            {{-- End New Advertisement 2 --}}
        </div>
</div>
{{-- Start All Content Grid --}}

<div class="mt-40"></div>
@endsection

