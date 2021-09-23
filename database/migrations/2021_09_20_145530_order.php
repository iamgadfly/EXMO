<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            // $table->order_id();
            $table->string('income_route');
            $table->string('outcome_route');
            $table->string('income_sum');
            $table->string('outcome_sum');
            // $table->rates_id();
            $table->string('requisites');
            $table->string('mail');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
