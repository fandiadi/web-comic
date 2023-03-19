<?php

use App\Models\ComicGenre;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_genres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comic_id');
            $table->foreignId('genre_id');
            $table->string('slug_genre');
            $table->timestamps();
        });

        ComicGenre::create([
            'comic_id' => '1',
            'genre_id' => '1',
            'slug_genre' => 'adventure',
        ]);
        ComicGenre::create([
            'comic_id' => '1',
            'genre_id' => '3',
            'slug_genre' => 'comedy',
        ]);
        ComicGenre::create([
            'comic_id' => '2',
            'genre_id' => '2',
            'slug_genre' => 'action',
        ]);
        ComicGenre::create([
            'comic_id' => '3',
            'genre_id' => '2',
            'slug_genre' => 'action',
        ]);
        ComicGenre::create([
            'comic_id' => '4',
            'genre_id' => '3',
            'slug_genre' => 'comedy',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_genres');
    }
};
