<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:Backup/database/migrations/2014_10_12_100000_create_password_resets_table.php
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
=======
        Schema::create('anketa', function (Blueprint $table) {
            $table->bigIncrements('anketa_id')->unique;
            $table->string('nosaukums',100);
            $table->string('apraksts',300);
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->timestamps();
>>>>>>> 64a91739d606ce4897f64037befb28fb3ff1626b:database/migrations/2019_06_12_125753_create_anketa_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
