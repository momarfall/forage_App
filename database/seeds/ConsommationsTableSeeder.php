<?php

use Illuminate\Database\Seeder;

class ConsmmationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Consommation::class,100)->create(["factures_id"=>null]);

    }
}