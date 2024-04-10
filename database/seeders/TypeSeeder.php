<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // leggere i dati dal file csv per poter caricare la tabella del DB
        $csv_file = fopen(__DIR__ . "/../csv/types.csv", "r");
        $first_line = true;
        while (!feof($csv_file)) {
            $csv_line = fgetcsv($csv_file);
            if ($csv_line) {
                # code...
                if (!$first_line) {
                    $type = new Type;
                    $type->name = $csv_line[0];
                    $type->Image = $csv_line[1];
                    $type->desc = $csv_line[2];
                    $type->save();
                }
                $first_line = false;
            }
        }
    }
}
