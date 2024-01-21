<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
use Faker\Factory as  Faker;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i = 0; $i < 100; $i++)
        {
            $faker = Faker :: create();
            $customer = new Customers;
            $customer->name = $faker->name;
            $customer->city = $faker->city;
            $customer->state = $faker->state;
            $customer->address = $faker->address;
            $customer->dob =$faker->date;
            $customer->password = $faker->password;
            $customer->email = $faker->email();
            $customer->gender = "M";
            $customer->save();

        }
    }
}
