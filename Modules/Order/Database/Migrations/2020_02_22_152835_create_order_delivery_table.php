<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_delivery', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned()->index();
            $table->bigInteger('delivery_id')->unsigned()->index();
        });

        Schema::table('order_delivery', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('delivery_id')->references('id')->on('deliveries');
            $table->primary(['order_id', 'delivery_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_delivery');
    }
}
