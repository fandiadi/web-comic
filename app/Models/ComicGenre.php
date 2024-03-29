<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicGenre extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comic()
    {
        return $this->hasMany(Comic::class, 'comic_genre_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
