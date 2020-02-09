<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payment', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned()->index();
            $table->bigInteger('payment_id')->unsigned()->index();
        });

        Schema::table('order_payment', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->primary(['order_id', 'payment_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_payment');
    }
}
