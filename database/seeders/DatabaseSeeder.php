<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Type;
use App\Models\User;
use App\Models\Comic;
use App\Models\Genre;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Post::create([
            'comic_id' => '1',
            'username_id' => '1',
            'slug' => 'naruto-shipuden',
            'slug_chapter' => 'naruto-shipuden-chapter-1',
            'chapter' => '1',
            'post_status' => 'Ongoing',
            'project_owner' => 'bacakomik',
        ]);
        Post::create([
            'comic_id' => '1',
            'username_id' => '1',
            'slug' => 'naruto-shipuden',
            'slug_chapter' => 'naruto-shipuden-chapter-2',
            'chapter' => '2',
            'post_status' => 'Ongoing',
            'project_owner' => 'bacakomik',
        ]);
        Post::create([
            'comic_id' => '2',
            'username_id' => '1',
            'slug' => 'hell-mode',
            'slug_chapter' => 'hell-mode-chapter-1',
            'chapter' => '1',
            'post_status' => 'Ongoing',
            'project_owner' => 'readcomic',
        ]);
        Post::create([
            'comic_id' => '2',
            'username_id' => '2',
            'slug' => 'hell-mode',
            'slug_chapter' => 'hell-mode-chapter-2',
            'chapter' => '2',
            'post_status' => 'Ongoing',
            'project_owner' => 'readcomic',
        ]);
        Post::create([
            'comic_id' => '3',
            'username_id' => '1',
            'slug' => 'ragna-crimson',
            'slug_chapter' => 'ragna-crimson-chapter-1',
            'chapter' => '1',
            'post_status' => 'Ongoing',
            'project_owner' => 'bacakomik',
        ]);
        Post::create([
            'comic_id' => '3',
            'username_id' => '1',
            'slug' => 'ragna-crimson',
            'slug_chapter' => 'ragna-crimson-chapter-2',
            'chapter' => '2',
            'post_status' => 'Ongoing',
            'project_owner' => 'bacakomik',
        ]);
    }
}
