<?php

use App\Models\Comic;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('type_id');
            $table->foreignId('comic_genre_id');
            $table->foreignId('comic_gallery_id')->nullable();
            $table->string('synopsis');
            $table->string('comic_status');
            $table->string('author');
            $table->string('artist');
            $table->string('rating');
            $table->string('release');
            $table->string('image_cover')->nullable();
            $table->string('gallery')->nullable();
            $table->timestamps();
        });

        Comic::create([
            'title' => 'Naruto Shipuden',
            'slug' => 'naruto-shipuden',
            'type_id' => '1',
            'comic_genre_id' => '1',
            'comic_gallery_id' => '1',
            'synopsis' => 'ini ini adalh synopsis dari komik naruto shipuden',
            'comic_status' => 'Ongoing',
            'author' => 'asep',
            'artist' => 'asep',
            'rating' => '4',
            'release' => '12 januari 2022',
            'image_cover' => 'naruto-shipuden.jpg',
        ]);
        Comic::create([
            'title' => 'Hell Mode',
            'slug' => 'hell-mode',
            'type_id' => '2',
            'comic_genre_id' => '2',
            'comic_gallery_id' => '2',
            'synopsis' => 'ini ini adalh synopsis dari komik hell mode',
            'comic_status' => 'Ongoing',
            'author' => 'rudi',
            'artist' => 'rudi',
            'rating' => '4',
            'release' => '13 januari 2022',
            'image_cover' => 'hell-mode.jpg',
        ]);
        Comic::create([
            'title' => 'Ragna Crimson',
            'slug' => 'ragna-crimson',
            'type_id' => '3',
            'comic_genre_id' => '2',
            'synopsis' => 'ini ini adalh synopsis dari komik 3',
            'comic_status' => 'Hiatus',
            'author' => 'lusi',
            'artist' => 'lusi',
            'rating' => '4',
            'release' => '14 januari 2022',
            'image_cover' => 'ragna-crimson.jpg',
        ]);
        Comic::create([
            'title' => 'Komik 4',
            'slug' => 'komik-4',
            'type_id' => '1',
            'comic_genre_id' => '3',
            'synopsis' => 'ini ini adalh synopsis dari komik 4',
            'comic_status' => 'Tamat',
            'author' => 'tatang',
            'artist' => 'tatang',
            'rating' => '4',
            'release' => '15 januari 2022',
            'image_cover' => 'komik4.jpg',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
