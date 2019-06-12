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
            $table->bigIncrements('anketa_id')->unique;
            $table->string('nosaukums',100);
            $table->string('apraksts',300);
            $table->foreign('user_id')->references('user_id')->on('user');
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
