<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b', function (Blueprint $table) {
            $table->increments('id_b');
            $table->string('nama');
            $table->timestamps();

            $table->integer('id_a')->unsigned();
            $table->foreign('id_a')->references('id_a')->on('a')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('b');
    }
}
