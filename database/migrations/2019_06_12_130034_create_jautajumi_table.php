<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJautajumiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jautajumi', function (Blueprint $table) {
            $table->bigIncrements('jautajumi_id')->unique;
            $table->string('jautajums',300);
            $table->foreign('anketa_id')->references('anketa_id')->on('anketa');
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
        Schema::dropIfExists('jautajumi');
    }
}
