<?php

namespace Database\Seeders;

use App\Models\UpcomingEvent;
use Illuminate\Database\Seeder;

class UpcomingEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/seeds/upcomingEvent.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                UpcomingEvent::create([
                    "title" => $data['0'],
                    "description" => $data['1'],
                    "date" => $data['2'],
                    "start_time" => $data['3'],
                    "end_time" => $data['4']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
