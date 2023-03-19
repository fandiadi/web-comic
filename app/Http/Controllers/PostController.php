<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Comic;
use App\Models\ComicGallery;
use App\Models\ComicGenre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_owner = Str::of(env('APP_NAME'))->lower();

        return view('home', [
            'updates' => Post::all()->sortByDesc('slug_chapter')->unique('slug')->all(),
            'projects' => Post::all()->sortByDesc('slug_chapter')->where('project_owner', $project_owner)->unique('slug'),
            // 'projects' => Post::all()->where('project_owner', $project_owner),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $x = Comic::all()->where('slug', $post['slug']);
        // dump($x);
        return view('preview_komik', [
            "post" => $post,
            "genres" => ComicGenre::all()->where('comic_id', $post['id']),
            "chapters" => Post::all()->sortByDesc('slug_chapter')->where('slug', $post['slug'])->all(),
            "gallerys" => ComicGallery::all()->where('slug_comic', $post['slug']),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
