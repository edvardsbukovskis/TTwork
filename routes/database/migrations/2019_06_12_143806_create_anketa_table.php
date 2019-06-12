<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnketaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anketa', function (Blueprint $table) {
            $table->bigIncrements('anketa_id', 1)->unique();
            $table->string('description', 100);
            $table->string('nosaukums', 100);
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('users_id')->on('users');
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
        Schema::dropIfExists('anketa');
    }
}