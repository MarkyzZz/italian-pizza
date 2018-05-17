<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	        'email' => 'admin@italian.pi',
	        'full_name' => 'Johny Conta',
	        'phone' => '069849825',
	        'city' => 'Bacioi',
	        'street' => '31 august 1989',
	        'block_number' => '8',
	        'apartment_number' => null,
	        'doorcode' => null,
	        'additional_info' => 'Me like pizza@!',
	        'password' => 'a123456',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now()
        ]);
         DB::table('users')->insert([
	        'email' => 'alfonson@italian.pi',
	        'full_name' => 'cadro Conta',
	        'phone' => '469249825',
	        'city' => 'Bacioi',
	        'street' => '31 august 1989',
	        'block_number' => '12',
	        'apartment_number' => null,
	        'doorcode' => null,
	        'additional_info' => 'Me like pizza ananasio@!',
	        'password' => 'a123456',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now()
        ]);
          DB::table('users')->insert([
	        'email' => 'antonio@italian.pi',
	        'full_name' => 'JConta',
	        'phone' => '069251415',
	        'city' => 'Bacioi',
	        'street' => '31 august 1989',
	        'block_number' => '24',
	        'apartment_number' => null,
	        'doorcode' => null,
	        'additional_info' => 'I h8 pizza',
	        'password' => 'a123456',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now()
        ]);
           DB::table('users')->insert([
	        'email' => 'dapovoroateleshelea@italian.pi',
	        'full_name' => 'Domn Anatol',
	        'phone' => '069849825',
	        'city' => 'Ele',
	        'street' => 'Singure S dau La loc',
	        'block_number' => '18',
	        'apartment_number' => null,
	        'doorcode' => null,
	        'additional_info' => 'Unde s deie la loc dupa atata frecatura intransele',
	        'password' => 'a123456',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now()
        ]);
    }
}
