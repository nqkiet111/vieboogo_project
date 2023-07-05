<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissionpages', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('page_id');
            $table->foreign('page_id')
                ->references('page_id')
                ->on('pages')
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
        Schema::dropIfExists('permissionpages');
    }
}
