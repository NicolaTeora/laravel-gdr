<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $character = new Character();
            $character->name = $faker->name();
            $character->description = $faker->paragraph(2);
            $character->attack = $faker->numberBetween(1, 100);
            $character->defense = $faker->numberBetween(1, 100);
            $character->speed = $faker->numberBetween(1, 100);
            $character->life = $faker->numberBetween(1, 100);
            $character->save();
        }
    }
}
