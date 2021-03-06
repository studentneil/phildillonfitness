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
        $this->call(array(
            CampsTableSeeder::class,
            UsersTableSeeder::class,
            PriceTableSeeder::class
            )
        );
    }
}
