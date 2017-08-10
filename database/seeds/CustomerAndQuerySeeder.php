<?php

use Illuminate\Database\Seeder;

class CustomerAndQuerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CustomerQuery::class, 10)->create();
    }
}
