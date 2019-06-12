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
            $table->bigIncrements('atbildes_id')->unique;
            $table->string('atbilde',300);
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('jautajumi_id')->references('jautajumi_id')->on('jautajumi');
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
