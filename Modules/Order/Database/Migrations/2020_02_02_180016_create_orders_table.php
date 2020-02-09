<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id')->unsigned()->index();
            $table->bigInteger('status_id')->unsigned()->index();
            $table->bigInteger('number');
            $table->float('value');
            $table->timestamps();
        });

        Schema::table('orders', function(Blueprint $table){
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
