<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_admin', function (Blueprint $table) {
            $table->integer('admin_id')->unsigned()->index();
            $table->integer('role_id')->unsigned()->index();
        });

        Schema::table('role_admin', function($table) {
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->primary(['admin_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_admin');
    }
}
