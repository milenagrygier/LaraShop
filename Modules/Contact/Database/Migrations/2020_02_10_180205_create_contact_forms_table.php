<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_id')->unsigned()->index();
            $table->string('subject');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('content');
            $table->timestamps();
        });

        Schema::table('contact_forms', function(Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('contact_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
}
