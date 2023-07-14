<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('nv_id');
            $table->string('manv');
            $table->string('fullname');
            $table->string('sodienthoai')->nullable();
            $table->string('diachi')->nullable();
            $table->string('ramdomcode');
            $table->string('username');
            $table->string('password');
            $table->boolean('active');
            $table->integer('countlogin')->nullable();
            $table->boolean('isAdmin');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('nhanvien');
    }
}
