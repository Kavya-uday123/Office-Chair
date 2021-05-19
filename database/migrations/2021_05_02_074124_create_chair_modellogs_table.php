<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairModellogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chair_modellogs', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Address");
            $table->string("Pincode");
            $table->string("State");
            $table->string("Gender");
            $table->string("Phone");
            $table->string("Email");
            $table->string("Password");
            $table->string("ConfirmPassword");
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
        Schema::dropIfExists('chair_modellogs');
    }
}
