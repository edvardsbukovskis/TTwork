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
            $table->bigIncrements('jautajumi_id')->unique();
            $table->integer('anketa_id')->unsigned();
            $table->foreign('anketa_id')->references('anketa_id')->on('anketas');
            $table->string('jautajums', 120);
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
