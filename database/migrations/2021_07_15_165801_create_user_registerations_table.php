<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegisterationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registerations', function (Blueprint $table) {
            $table->id();
            $table->text('user_name');
            $table->text('user_lastName');
            $table->text('user_business');
            $table->text('user_Phone');
            $table->text('user_client');
            $table->text('user_email');
            $table->text('user_Password');
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
        Schema::dropIfExists('user_registerations');
    }
}
