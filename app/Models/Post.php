<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public static function arrToString($post)
    // {
    //     $gallery = Comic::where('slug', $post['slug'])->get('gallery');
    //     $pattern = "/[\s,]+/";
    //     $components = preg_split($pattern, $gallery);
    //     $components = implode('#', $components);
    //     $components = explode('#', $components);
    //     $components = \array_diff_key($components, [0 => '0', 5 => '5']); // Clear array 0 and 5
    //     return $components;
    // }


    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // public function comicType()
    // {
    //     return $this->hasOneThrough(Comic::class, Type::class);
    // }
}
