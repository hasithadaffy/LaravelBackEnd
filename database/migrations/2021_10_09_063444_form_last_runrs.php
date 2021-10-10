<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormLastRunrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('form_last_runrs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('runner_id');
            $table->foreign('runner_id')->references('id')->on('runners');
            $table->string("position",100);
            $table->string("weight",100);
            $table->integer("number");
            $table->string("track",100);
            $table->date("date");
            $table->string("category",100);
            $table->string("stamina",100);
            $table->string("fixed_odds_price",100);
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
        //
        Schema::dropIfExists('form_last_runrs');
    }
}
