<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:Backup/database/migrations/2014_10_12_000000_create_users_table.php
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
=======
        Schema::create('jautajumi', function (Blueprint $table) {
            $table->bigIncrements('jautajumi_id')->unique;
            $table->string('jautajums',300);
            $table->foreign('anketa_id')->references('anketa_id')->on('anketa');
>>>>>>> 64a91739d606ce4897f64037befb28fb3ff1626b:database/migrations/2019_06_12_130034_create_jautajumi_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
