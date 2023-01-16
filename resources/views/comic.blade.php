@extends('layouts.main')

@section('container')
<div class="container mini:mx-auto lg:px-60 bg-white">
    <div class="mt-6 mb-7">
        <h1 class="text-center font-sans md:font-bold mini:text-lg md:text-xl mini:font-semibold">Ini adalah judul dari komik ini, harus besar dan bold Chapter 01 Bahasa Indonesia</h1>
        <h1 class="font-sans text-center mini:text-sm md:text-base">Kamu sedang membaca komik blablablablabla Chapter 1</h1>
    </div>

    {{-- Start Navigation TOP Chapter --}}
    <div class="flex flex-wrap justify-between mb-4">
        <div class="dropdown">
            <label tabindex="0" class="btn m-1 bg-primary text-textprimary hover:text-texthover">Chapter</label>
                <ul tabindex="0" class="bg-box block dropdown-content menu text-sm p-1 shadow w-36 overflow-y-auto max-h-[35rem]">
                    <li><a>Chapter 1</a></li>
                    <li><a>Item 2</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 4</a></li>
                    <li><a>Item 5</a></li>
                    <li><a>Item 6</a></li>
                    <li><a>Item 7</a></li>
                    <li><a>Item 8</a></li>
                    <li><a>Item 9</a></li>
                    <li><a>Item 10</a></li>
                    <li><a>Item 11</a></li>
                    <li><a>Item 12</a></li>
                    <li><a>Item 13</a></li>
                    <li><a>Item 14</a></li>
                    <li><a>Item 15</a></li>
                    <li><a>Item 16</a></li>
                    <li><a>Item 17</a></li>
                    <li><a>Item 18</a></li>
                </ul>
        </div>

        <div class="flex gap-1 items-center">
            <div class="bg-primary btn rounded-lg text-textprimary p-3 m-1 hover:text-texthover">
                <a href="" class="">Prev</a>
            </div>
            <div class="bg-primary btn rounded-lg text-textprimary p-3 m-1 hover:text-texthover">
                <a href="" class="">Next</a>
            </div>
        </div>
    </div>
    {{-- Start Navigation TOP Chapter --}}



    {{-- Main Image Comic --}}
    <div class="flex flex-wrap justify-center bg-red-300">
        <img src="/comic/new/009.jpg" class="lg:max-w-fit xl:max-w-3xl" alt="komik 1">
        <img src="/comic/new/011.jpg" class="lg:max-w-fit xl:max-w-3xl" alt="komik 2">
        <img src="/comic/new/012.jpg" class="lg:max-w-fit xl:max-w-3xl" alt="komik 3">
    </div>
    {{-- End Main Image Comic --}}

    {{-- Start Navigation BOTTOM Chapter --}}
    <div class="flex flex-wrap justify-between mt-4 mb-10">
        <div class="dropdown dropdown-top">
            <label tabindex="0" class="btn m-1 bg-primary text-textprimary hover:text-texthover">Chapter</label>
                <ul tabindex="0" class="bg-box block dropdown-content menu text-sm p-1 shadow w-36 overflow-x-auto max-h-[35rem]">
                    <li><a>Chapter 1</a></li>
                    <li><a>Item 2</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 4</a></li>
                    <li><a>Item 5</a></li>
                    <li><a>Item 6</a></li>
                    <li><a>Item 7</a></li>
                    <li><a>Item 8</a></li>
                    <li><a>Item 9</a></li>
                    <li><a>Item 10</a></li>
                    <li><a>Item 11</a></li>
                    <li><a>Item 12</a></li>
                    <li><a>Item 13</a></li>
                    <li><a>Item 14</a></li>
                    <li><a>Item 15</a></li>
                    <li><a>Item 16</a></li>
                    <li><a>Item 17</a></li>
                    <li><a>Item 18</a></li>
                </ul>
        </div>

        <div class="flex gap-1 items-center">
            <div class="bg-primary btn rounded-lg text-textprimary p-3 m-1 hover:text-texthover">
                <a href="" class="">Prev</a>
            </div>
            <div class="bg-primary btn rounded-lg text-textprimary p-3 m-1 hover:text-texthover">
                <a href="" class="">Next</a>
            </div>
        </div>
    </div>
    {{-- Start Navigation BOTTOM Chapter --}}

</div>
@endsection
