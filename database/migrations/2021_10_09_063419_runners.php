<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Runners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('runners', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->integer("age")->unsigned();
            $table->string("sex",10);
            $table->string("color",10);
            $table->unsignedBigInteger('race_id');
            $table->foreign('race_id')->references('id')->on('races');
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
        Schema::dropIfExists('runners');
    }
}
