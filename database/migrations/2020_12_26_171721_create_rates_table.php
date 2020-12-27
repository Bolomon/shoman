<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('rate');
            $table->unsignedBigInteger('id_student')->unsigned();
            $table->unsignedBigInteger('id_teacher')->unsigned();
            $table->timestamps();
            $table->foreign('id_student')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_teacher')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}

// $table->integer('id_teacher')->unsigned();
// $table->foreign('id_teacher')->references('id')->on('users');
