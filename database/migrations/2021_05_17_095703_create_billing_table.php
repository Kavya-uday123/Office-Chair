<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_billing', function (Blueprint $table) {
            $table->id('billing_id');
            $table->string('name');
            $table->string('contact');
            $table->string('email');
            $table->string('add1',1000);
            $table->string('add2',1000);
            $table->string('city');
            $table->string('pincode');
            $table->string('shipping_add',1000);
            $table->integer('cust_id');
            $table->string('no');
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
        Schema::dropIfExists('tbl_billing');
    }
}
