<?php

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        $comicTypes = [
            'comic book',
            'graphic novel',
            'manga',
            'european',
        ];

        for ($i=0; $i <50 ; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->realText(25);
            $newComic->description = $faker->realText(150);
            $newComic->thumbnail = $faker->imageUrl(250, 350, "comics");
            $newComic->price = $faker->randomFloat(2, 20, 100);
            $newComic->series = $faker->realText(25);
            $newComic->date = $faker->date();
            $newComic->type = $faker->randomElement($comicTypes);
            $newComic->save();

        }
    }
}
