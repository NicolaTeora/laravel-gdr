<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Item;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class character_item extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $characters = Character::all();

        $items = Item::all()->pluck('id')->toArray(); 
        
        foreach($characters as $character){

            $character->items()->attach($faker->randomElements($items, random_int(1, 3)));


        }

        
    }
}
