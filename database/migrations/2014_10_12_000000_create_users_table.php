<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('gender')->nullable();
            $table->string('photo')->nullable();
            $table->string('doc_086')->nullable();
            $table->string('doc_063')->nullable();
            $table->string('quota')->nullable();
            $table->string('pdf_quota')->nullable();
            $table->string('boy_reg')->nullable();
            $table->string('status')->nullable();
            $table->string('feadback')->nullable();
            $table->boolean('isChecked')->nullable();


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
