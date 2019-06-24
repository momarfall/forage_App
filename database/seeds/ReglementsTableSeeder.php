<?php

use Illuminate\Database\Seeder;

class ReglementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Reglement::class,10)->create();

    }
}