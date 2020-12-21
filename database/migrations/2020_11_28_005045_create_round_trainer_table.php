<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundTrainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_trainer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('trainerId')->unsigned()->nullable();
            $table->foreign('trainerId')->references('id')->on('trainers');
            $table->BigInteger('roundId')->unsigned()->nullable();
            $table->foreign('roundId')->references('id')->on('rounds');

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
        Schema::dropIfExists('round_trainer');
    }
}
