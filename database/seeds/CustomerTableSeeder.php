<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Customer::truncate();

        foreach(range(1, 100) as $i) {
            Customer::create([
                'name' => $faker->firstname,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}
