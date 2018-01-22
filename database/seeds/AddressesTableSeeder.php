<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addresses')->delete();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Address::create([
                'street' => $faker->streetName,
                'number' => $faker->buildingNumber,
                'complement' => $faker->secondaryAddress,
                'province' => $faker->state,
                'city' => $faker->city,
                'countriesId' => 76
            ]);
        }
    }
    
}
