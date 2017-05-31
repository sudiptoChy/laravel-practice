<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressesTableSeeder extends Seeder
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
                'user_id' => '1',
                'type' => 'a',
                'address_line_1' => 'sylhet',
                'address_line_2' => 'sylhet bhatalia',
                'city' => 'sylhet',
                'state' => 'sylhet',
                'postal_code' => '3100',
                'country_id' => '1',
                
            ],
            [
                'user_id' => '2',
                'type' => 'a',
                'address_line_1' => 'dhaka',
                'address_line_2' => 'dhaka new city',
                'city' => 'dhaka',
                'state' => 'dhaka',
                'postal_code' => '2300',
                'country_id' => '1',
                
            ]
            
        ];
        foreach($data as $data)
        {
            Address::forceCreate($data);
        }
    }
}
