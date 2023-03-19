<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicGallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comic()
    {
        return $this->hasMany(Comic::class, 'comic_gallery_id');
    }
}
