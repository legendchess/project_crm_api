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
        $sum = 123;
        Rate::create([

        	'name' => 'Bekair',
        	'fees' => $sum,

        ]);
    }
}
