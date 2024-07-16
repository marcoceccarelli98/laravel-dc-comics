<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = config('comics');

        foreach ($seeds as $seed) {

            $comic = new Comic();

            $comic->title = $seed['title'];
            $comic->description = $seed['description'];
            $comic->thumb = $seed['thumb'];
            $comic->price = $seed['price'];
            $comic->series = $seed['series'];
            $comic->sale_date = $seed['sale_date'];
            $comic->type = $seed['type'];
            $comic->artists = $seed['artists'];
            $comic->writers = $seed['writers'];

            $comic->save();
        }
    }
}
