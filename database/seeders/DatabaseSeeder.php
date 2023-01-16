<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Type;
use App\Models\User;
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
        User::create([
            'name' => 'Fandi Adi',
            'username' => 'fandiadi',
            'email' => 'fandiadi@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Type::create([
            'name' => 'Manga',
            'slug' => 'manga',
        ]);
        Type::create([
            'name' => 'Manhua',
            'slug' => 'manhua',
        ]);
        Type::create([
            'name' => 'Manhwa',
            'slug' => 'Manhwa',
        ]);
    }
}
