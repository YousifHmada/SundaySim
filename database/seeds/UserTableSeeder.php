<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();
         DB::table('users')->insert([
         	[
	            'name' => 'watson',
	            'email' => 'watson'.'@gmail.com',
	            'password' => bcrypt('secret'),
	        ],
	        [
	            'name' => 'ema',
	            'email' => 'ema'.'@gmail.com',
	            'password' => bcrypt('secret'),
	        ]
         ]);
    }
}
