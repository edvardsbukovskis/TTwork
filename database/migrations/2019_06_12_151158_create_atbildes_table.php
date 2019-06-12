<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtbildesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atbildes', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('atbilde',190);
            $table->integer('jautajumi_id')->unsigned();
            $table->foreign('jautajumi_id')->references('id')->on('jautajumi');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('atbildes');
    }
}
