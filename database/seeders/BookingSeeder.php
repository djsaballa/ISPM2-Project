<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $csvFile = fopen(base_path("database/seeds/booking.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Booking::create([
                    "user_id" => $data['0'],
                    "desk_id" => $data['1'],
                    "date" => $data['2'],
                ]);
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}