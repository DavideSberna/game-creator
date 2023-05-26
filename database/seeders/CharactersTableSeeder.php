<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Character;


class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newCharacter = new Character();
            $newCharacter->name = $faker->words(3, true);
            $newCharacter->description = $faker->paragraph();
            $newCharacter->type_id = $faker->numberBetween(0, 10);
            $newCharacter->attack = $faker->numberBetween(0, 100);
            $newCharacter->defense = $faker->numberBetween(0, 100);
            $newCharacter->speed = $faker->numberBetween(0, 50);
            $newCharacter->life = $faker->numberBetween(0, 1000);
            $newCharacter->save();
        }
    }
}
