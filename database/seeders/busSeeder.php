<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Bus;

class busSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 30; $i++){
            $faker = Faker::create();
            $prfile  = new Bus();
            $prfile->user_id = 1;
            $prfile->name = $faker->name;
            $prfile->totalSeat = rand(30,60);
            $prfile->status = 0;
            $prfile->save();
        }
    }
}
