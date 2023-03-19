<?php

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comic_id');
            // $table->foreignId('type_id');
            // $table->foreignId('genre_id');
            $table->foreignId('username_id')->nullable();
            $table->string('slug');
            $table->string('slug_chapter')->unique();
            $table->string('chapter')->nullable();
            $table->string('image')->nullable();
            $table->string('post_status')->nullable();
            $table->string('project_owner')->nullable();
            $table->timestamp('schedule_post')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
