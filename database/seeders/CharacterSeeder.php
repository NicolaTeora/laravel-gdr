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
        $characters=config('characters');

        foreach ($characters as $currCharacter) {
            $character = new Character();
            $character->name = $currCharacter['name'];
            $character->description = $currCharacter['description'];
            $character->attack = $currCharacter['strength'];
            $character->defense = $currCharacter['defence'];
            $character->speed = $currCharacter['speed'];
            $character->speed = $currCharacter['intelligence'];
            $character->life = $currCharacter['life'];
            $character->save();
        }
    }
}
