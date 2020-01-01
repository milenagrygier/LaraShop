<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('instance')->index();
            $table->string('channel')->index();
            $table->string('file')->nullable();
            $table->integer('line')->nullable();
            $table->string('exception_class')->nullable();
            $table->ipAddress('ip');
            $table->string('user_agent', 200)->nullable();
            $table->integer('level');
            $table->string('level_name', 10);
            $table->text('message');
            $table->longText('context');
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
        Schema::dropIfExists('logs');
    }
}
