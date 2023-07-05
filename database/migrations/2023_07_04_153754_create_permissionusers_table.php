<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissionusers', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('nv_id');
            $table->foreign('nv_id')
                ->references('nv_id')
                ->on('nhanvien')
                ->onDelete('cascade');

            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id')
                ->references('permission_id')
                ->on('permissions')
                ->onDelete('cascade');


            $table->rememberToken();
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
        Schema::dropIfExists('permissionusers');
    }
}
