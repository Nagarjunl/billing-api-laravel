<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('party_name');
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->integer('opening_balance')->default(0);
            $table->string('party_type');
            $table->string('gst_number')->nullable();
            $table->string('state');
            $table->string('billing_address')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('credit_period')->nullable();
            $table->integer('credit_limit')->default(0);
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
        Schema::dropIfExists('parties');
    }
};
