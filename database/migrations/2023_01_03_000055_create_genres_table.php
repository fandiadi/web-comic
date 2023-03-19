<?php

use App\Models\Genre;
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
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Genre::create([
            'name' => 'Adventure',
            'slug' => 'adventure',
        ]);
        Genre::create([
            'name' => 'Action',
            'slug' => 'action',
        ]);
        Genre::create([
            'name' => 'Comedy',
            'slug' => 'comedy',
        ]);
        Genre::create([
            'name' => 'Cooking',
            'slug' => 'cooking',
        ]);
        Genre::create([
            'name' => 'Crime',
            'slug' => 'crime',
        ]);
        Genre::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy',
        ]);
        Genre::create([
            'name' => 'Gore',
            'slug' => 'gore',
        ]);
        Genre::create([
            'name' => 'Game',
            'slug' => 'game',
        ]);
        Genre::create([
            'name' => 'Horor',
            'slug' => 'horor',
        ]);
        Genre::create([
            'name' => 'Isekai',
            'slug' => 'isekai',
        ]);
        Genre::create([
            'name' => 'Magic',
            'slug' => 'magic',
        ]);
        Genre::create([
            'name' => 'Mature',
            'slug' => 'mature',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
};
