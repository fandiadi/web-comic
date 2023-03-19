<?php

use App\Models\Type;
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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Type::create([
            'name' => 'Manga',
            'code' => 'jp',
            'slug' => 'manga',
        ]);
        Type::create([
            'name' => 'Manhua',
            'code' => 'cn',
            'slug' => 'manhua',
        ]);
        Type::create([
            'name' => 'Manhwa',
            'code' => 'kr',
            'slug' => 'manhwa',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
};
