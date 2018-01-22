<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $faker = \Faker\Factory::create();

        
        $password = Hash::make('toptal');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'login' => 'admin',
            'password' => $password,
            'addressesId' => rand(1,20)
        ]);

        
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'login' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $password,
                'addressesId' => rand(1,20)
            ]);
        }
    }
    
}
