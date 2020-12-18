<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('first');
            $table->foreign('first')->references('id')->on('prof_univers');
            $table->unsignedBigInteger('second');
            $table->foreign('second')->references('id')->on('prof_univers');
            $table->unsignedBigInteger('third');
            $table->foreign('third')->references('id')->on('prof_univers');
            $table->unsignedBigInteger('fourth');
            $table->foreign('fourth')->references('id')->on('prof_univers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choices');
    }
}
