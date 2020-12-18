<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_n_t_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('reading')->nullable();
            $table->integer('math')->nullable();
            $table->integer('history')->nullable();
            $table->string('subject_1_name')->nullable();
            $table->string('subject_2_name')->nullable();
            $table->integer('subject_1_point')->nullable();
            $table->integer('subject_2_point')->nullable();
            $table->integer('total')->nullable();
            $table->string('tjk')->nullable();
            $table->string('language')->nullable();
            $table->string('file')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_n_t_s');
    }
}
