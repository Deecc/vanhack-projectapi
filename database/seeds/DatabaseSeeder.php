<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Seed the countries
        $this->call('CountriesSeeder');
        $this->command->info('Seeded the countries!');
        $this->call('AddressesTableSeeder');
        $this->command->info('Seeded the addresses!');
        $this->call('UsersTableSeeder');
        $this->command->info('Seeded the users!');
        //$this->call('ThreadsTableSeeder');
        //$this->command->info('Seeded the Threads!');
        //$this->call('PostsTableSeeder');
        //$this->command->info('Seeded the Posts!');

    }
}
