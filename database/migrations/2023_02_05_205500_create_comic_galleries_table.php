<?php

use App\Models\ComicGallery;
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
        Schema::create('comic_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comic_id');
            $table->string('slug_comic');
            $table->string('path');
            $table->timestamps();
        });

        ComicGallery::create([
            'comic_id' => '1',
            'slug_comic' => 'naruto-shipuden',
            'path' => 'gallery-naruto-shipuden-1.jpg',
        ]);
        ComicGallery::create([
            'comic_id' => '1',
            'slug_comic' => 'naruto-shipuden',
            'path' => 'gallery-naruto-shipuden-2.jpg',
        ]);
        ComicGallery::create([
            'comic_id' => '1',
            'slug_comic' => 'naruto-shipuden',
            'path' => 'gallery-naruto-shipuden-3.jpg',
        ]);
        ComicGallery::create([
            'comic_id' => '1',
            'slug_comic' => 'naruto-shipuden',
            'path' => 'gallery-naruto-shipuden-4.jpg',
        ]);

        ComicGallery::create([
            'comic_id' => '2',
            'slug_comic' => 'hell-mode',
            'path' => 'gallery-hell-mode-1.webp',
        ]);
        ComicGallery::create([
            'comic_id' => '2',
            'slug_comic' => 'hell-mode',
            'path' => 'gallery-hell-mode-2.webp',
        ]);
        ComicGallery::create([
            'comic_id' => '2',
            'slug_comic' => 'hell-mode',
            'path' => 'gallery-hell-mode-3.webp',
        ]);
        ComicGallery::create([
            'comic_id' => '2',
            'slug_comic' => 'hell-mode',
            'path' => 'gallery-hell-mode-4.webp',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_galleries');
    }
};
