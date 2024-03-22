<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // leggere i dati dal file csv per poter caricare la tabella del DB
        $csv_file = fopen(__DIR__ . "/../csv/items.csv", "r");
        $first_line = true;
        while (!feof($csv_file)) {
            $csv_line = fgetcsv($csv_file);
            if ($csv_line) {
                # code...
                if (!$first_line) {
                    $item = new Item;
                    $item->name = $csv_line[0];
                    $item->slug = $csv_line[1];
                    $item->type = $csv_line[2];
                    $item->category = $csv_line[3];
                    $item->weight = $csv_line[4];
                    $item->cost = $csv_line[5];
                    $item->damage_dice = $csv_line[6];
                    $item->save();
                }
                $first_line = false;
            }
        }
    }
}
