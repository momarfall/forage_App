<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $type1=App\Type::firstOrCreate(['name'=>'Espece'],['uuid'=>(string)Str::uuid()]);
        $type2=App\Type::firstOrCreate(['name'=>'Cheque'],['uuid'=>(string)Str::uuid()]);
        $type3=App\Type::firstOrCreate(['name'=>'Visa'],['uuid'=>(string)Str::uuid()]);
        $type4=App\Type::firstOrCreate(['name'=>'Wari'],['uuid'=>(string)Str::uuid()]);
        $type5=App\Type::firstOrCreate(['name'=>'Orange Money'],['uuid'=>(string)Str::uuid()]);
        $type5=App\Type::firstOrCreate(['name'=>'Virement'],['uuid'=>(string)Str::uuid()]);

    }
}
