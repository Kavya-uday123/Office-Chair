<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('chair_models', function (Blueprint $table) {
            $table->id();
            $table->string('ccode');
            $table->string('cname');
            $table->string('cdes');
            $table->string('cqty');
            $table->string('crate');
         
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
        Schema::dropIfExists('chair_models');
    }
}
