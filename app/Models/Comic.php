<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['genre'] ?? false, function ($query, $genre) {
            return $query->whereHas('genre', function ($query) use ($genre) {
                // $query->where('slug', 'like', '%' . $genre . '%');
                $query->where('slug', $genre);
            });
        });
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function comic_genre()
    {
        return $this->belongsTo(ComicGenre::class);
    }

    public function comic_gallery()
    {
        return $this->belongsTo(ComicGallery::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
