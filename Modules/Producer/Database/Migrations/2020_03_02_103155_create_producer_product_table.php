<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_product', function (Blueprint $table) {
            $table->bigInteger('producer_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
        });

        Schema::table('producer_product', function (Blueprint $table) {
            $table->foreign('producer_id')->references('id')->on('producers');
            $table->foreign('product_id')->references('id')->on('products');
            $table->primary(['producer_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producer_product');
    }
}
