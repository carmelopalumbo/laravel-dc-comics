<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');
        //dd($comics_array);

        foreach ($comics_array as $comics) {
            $new_comics = new Comic();

            //$new_comics->title = $comics['title'];
            $new_comics->title = $comics['title'];
            $new_comics->slug = Comic::generateSlug($new_comics->title);
            $new_comics->description = $comics['description'];
            $new_comics->thumb = $comics['thumb'];
            $new_comics->price = $comics['price'];
            $new_comics->series = $comics['series'];
            $new_comics->sale_date = $comics['sale_date'];
            $new_comics->type = $comics['type'];

            $new_comics->save();
            //dump($new_comics);
        }
    }
}
