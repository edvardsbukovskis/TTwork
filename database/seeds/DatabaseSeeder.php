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
          'description'=>'Jautājums par dzīvi',
          'nosaukums'=>'Šis ir pirmais jautājums',
          'users_id'=>'1',
          'created_at'=>'2019-06-06 00:00:00',
          'updated_at'=>'2019-06-06 00:00:00',
        ]);
        DB::table('jautajumi')->insert([
          'anketa_id'=>'1',
          'jautajums'=>'Kurā kursā mēs mācāmies (atbildēt ar vārdu)',
        ]);
        DB::table('atbildes')->insert([
          'atbilde'=>'Pirmajā',
          'jautajumi_id'=>'1',
          'users_id'=>'2',
        ]);



    }
}
