<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        	[
        		'id' => 1,	
        		'name' => 'Bangladesh',	
        		'iso2'=>'AD',
        		'iso3'=>'AND',	
        		'numeric' =>'020',	
        		'currency' => 'BDT',
        	]

        ];

        foreach($data as $data)
        {
            Country::forceCreate($data);
        }
    }
}
