<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Type;
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
        $types = Type::all()->pluck('id');
        $types[] = null;

        for ($i = 0; $i < 10; $i++) {
            $type_id = $faker->randomElement($types);

            $character = new Character();
            $character->type_id = $type_id;
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
