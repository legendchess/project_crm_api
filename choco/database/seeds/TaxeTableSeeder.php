<?php

use Illuminate\Database\Seeder;
use App\Rate;
class RateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $taxe = new Tax;
        Rate::create([

        	'name' => $taxe->name
        	

        ]);
    }
}
