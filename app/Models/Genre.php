<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function comic()
    // {
    //     return $this->hasMany(Comic::class);
    // }


    public function comic_genre()
    {
        return $this->hasMany(ComicGenre::class, 'genre_id');
    }
}
