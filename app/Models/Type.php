<?php

namespace App\Models;

use App\Models\Comic;
use Clockwork\Request\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comic()
    {
        return $this->hasOne(Comic::class);
    }

    // public static function getTypeId($searchData)
    // {
    //     $type = DB::table('type')->where('slug', $searchData);
    //     return $type;
    // }
}
