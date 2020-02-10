<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_client', function (Blueprint $table) {
           $table->integer('client_id')->unsigned()->index();
           $table->bigInteger('contact_form_id')->unsigned()->index();
        });

        Schema::table('contact_client', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('contact_form_id')->references('id')->on('contact_forms');
            $table->primary(['client_id', 'contact_form_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_client');
    }
}
