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
        $characters=config('characters');

        $types = Type::all()->pluck('id');
        $types[] = null;

        foreach ($characters as $currCharacter) {
            $type_id =$currCharacter['type_id'];

            $character = new Character();
            $character->type_id = $type_id;
            $character->name = $currCharacter['name'];
            $character->description = $currCharacter['description'];
            $character->attack = $currCharacter['strength'];
            $character->defense = $currCharacter['defence'];
            $character->speed = $currCharacter['speed'];
            $character->intelligence = $currCharacter['intelligence'];
            $character->life = $currCharacter['life'];
            $character->save();
        }
    }
}
