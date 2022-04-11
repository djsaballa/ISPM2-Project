<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $csvFile = fopen(base_path("database/seeds/user.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    "first_name" => $data['0'],
                    "last_name" => $data['1'],
                    "email" => $data['2'],
                    "password" => $data['3'],
                    "phone_number" => $data['4'],
                    "department" => $data['5'],
                ]);
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
