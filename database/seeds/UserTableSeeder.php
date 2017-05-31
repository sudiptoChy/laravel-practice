<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
	        	'first_name' => 'Sudipto',
	            'last_name' => 'Chowdhury',
	            'email' => 'dip.chy93@gmail.com',
	            'password' => bcrypt(123456),
        	],

        	[
	        	'first_name' => 'Jon',
	            'last_name' => 'Doe',
	            'email' => 'jon.doe@gmail.com',
	            'password' => bcrypt(123456),
        	]
        ];

        foreach($data as $data)
        {
            User::forceCreate($data);
        }
    }
}
