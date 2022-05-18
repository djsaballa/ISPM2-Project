<?php

namespace Database\Seeders;

use App\Models\Desk;
use Illuminate\Database\Seeder;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            $csvFile = fopen(base_path("database/seeds/desk.csv"), "r");

            $firstline = true;
            while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
                if (!$firstline) {
                    Desk::create([
                        "seat_number" => $data['0'],
                    ]);
                }
                $firstline = false;
            }

            fclose($csvFile);
        }
    }
}
