<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a', function (Blueprint $table) {
            $table->increments('id_a');
            $table->string('nama');
            $table->timestamps();

            $table->integer('id_b')->unsigned();
            $table->foreign('id_b')->references('id_b')->on('b')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('a');
    }
}
