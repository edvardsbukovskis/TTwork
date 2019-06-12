<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:Backup/database/migrations/2019_04_28_151740_create_countries_table.php
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('country_id');
				$table->string('country_name',50)->unique;
				$table->string('country_code',10);
			$table->timestamps();
=======
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('user_id')->unique;
            $table->string('vards',30);
            $table->string('uzvards',50);
            $table->string('email',100);
            $table->timestamps();
>>>>>>> 64a91739d606ce4897f64037befb28fb3ff1626b:database/migrations/2019_06_12_125634_create_users_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
