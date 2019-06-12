<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
		'name'=>'Edvards Bukovskis',
		'email'=>'eb18081@lu.lv',
		'password'=>bcrypt('Edmat00799'),
		]);
		DB::table('countries')->insert([
		'country_name'=>'Latvia',
		'country_code'=>'LV',
		]);
		DB::table('countries')->insert([
		'country_name'=>'Finland',
		'country_code'=>'FI',
		]);
		DB::table('countries')->insert([
		'country_name'=>'Brazil',
		'country_code'=>'BR',
		]);
    }
}
