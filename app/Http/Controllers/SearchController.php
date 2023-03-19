<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Genre;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    public function index()
    {
        return view('search', [
            'title' => 'Search',
            'posts' => Comic::all(),
            'genres' => Genre::all(),
            'types' => Type::all(),
        ]);
    }

    public function show(Post $post)
    {
    }

    public function store(Request $request)
    {

        $getRequestGenre = $request->genre;
        $getRequestType = $request->all('type');
        // $dbType = Type::all();

        // dump(request(['genre']));

        return view('search', [
            'genres' => Genre::get(),
            'types' => Type::get(),
            'posts' => Comic::latest()->filter(request(['genre', 'type'])),
            // 'posts' => Comic::all()->sortDesc(),
            // 'posts' => Comic::latest(),
        ]);
        // dd($searchData);
    }
}
