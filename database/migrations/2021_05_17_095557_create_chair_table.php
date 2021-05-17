<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_chair', function (Blueprint $table) {
            $table->id('chair_id');
            $table->string('chair_name');
            $table->string('chair_desc',3000);
            $table->string('chair_qty');
            $table->string('chair_rate');
            $table->string('chair_img',1000);
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
        Schema::dropIfExists('tbl_chair');
    }
}
