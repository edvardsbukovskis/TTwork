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
          'email'=>'edvards.bukovskis@gmail.com',
          'password'=>bcrypt('Parole123'),
        ]);
        DB::table('users')->insert([
          'name'=>'Janis Emkens',
          'email'=>'emkensj@gmail.com',
          'password'=>bcrypt('Parole123'),
        ]);
        DB::table('users')->insert([
          'name'=>'Karlis Roberts Krumins',
          'email'=>'krk@gmail.com',
          'password'=>bcrypt('Parole123'),
        ]);
        DB::table('anketas')->insert([
          'description'=>'Vecāku apmierinātība par pašreizējo izglītību Rīgas 54. vidusskolā.',
          'nosaukums'=>'Aptauja vecākiem',
          'users_id'=>'1',
          'created_at'=>'2019-06-06 00:00:00',
          'updated_at'=>'2019-06-06 00:00:00',
        ]);
        DB::table('anketas')->insert([
          'description'=>'Jauniešu apmierinātība par pašreizējo izglītību Rīgas 54. vidusskolā.',
          'nosaukums'=>'Aptauja jauniešiem',
          'users_id'=>'2',
          'created_at'=>'2019-06-06 00:00:00',
          'updated_at'=>'2019-06-06 00:00:00',
        ]);
        DB::table('jautajumi')->insert([
          'anketa_id'=>'1',
          'jautajums'=>'Kā jūs raksturotu mūsu mācību iestādi?',
        ]);
        DB::table('jautajumi')->insert([
          'anketa_id'=>'1',
          'jautajums'=>'Vai jūsu bērns ir sūdzējies par skolu? Ja jā, tad par ko?',
        ]);
        DB::table('jautajumi')->insert([
          'anketa_id'=>'1',
          'jautajums'=>'Kādi būtu jūsu ieteikumi mūsu skolai?',
        ]);
        DB::table('jautajumi')->insert([
          'anketa_id'=>'2',
          'jautajums'=>'Vai jums patīk mūsu skola?',
        ]);
        DB::table('jautajumi')->insert([
          'anketa_id'=>'2',
          'jautajums'=>'Kādi būtu jūsu ieteikumi mūsu skolai?',
        ]);
        DB::table('atbildes')->insert([
          'atbilde'=>'Slikti. (Atbildes piemērs)',
          'jautajumi_id'=>'1',
          'users_id'=>'2',
        ]);



    }
}
