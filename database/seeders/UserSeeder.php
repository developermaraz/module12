<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 30; $i++){
            $faker = Faker::create();
            $prfile  = new User();
            $prfile->role = 0;
            $prfile->name = $faker->name;
            $prfile->email = $faker->email;
            $prfile->mobile = $faker->phoneNumber;
            $prfile->password = $faker->password;
            $prfile->status = 0;
            $prfile->save();
        }
    }
}
