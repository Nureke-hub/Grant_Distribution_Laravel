<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolCerteficatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_certeficates', function (Blueprint $table) {
            $table->id();
            $table->double('avarage_point')->nullable();
            $table->string('type')->nullable();
            $table->string('school_name')->nullable();
            $table->integer('graduation_year')->nullable();
            $table->string('region')->nullable();
            $table->string('file')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('school_certeficates');
    }
}
