<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');

        //check if slug exists
        $original_slug = $slug;
        $c = 1;
        $comics_exists = Comic::where('slug', $slug)->first();

        while ($comics_exists) {
            $slug = $original_slug . '-' . $c++;
            $comics_exists = Comic::where('slug', $slug)->first();
        }

        return $slug;
    }
}
