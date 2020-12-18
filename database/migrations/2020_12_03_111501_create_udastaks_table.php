<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUdastaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('udastaks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('iin')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('by_whom')->nullable();
            $table->string('file')->nullable();
            $table->string('nationality')->nullable();
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
        Schema::dropIfExists('udastaks');
    }
}
