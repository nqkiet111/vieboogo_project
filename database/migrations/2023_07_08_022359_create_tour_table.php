<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->string('tour_id')->primary();
            $table->integer('tour_idnv')->nullable();
            $table->integer('tour_idncc')->nullable();
            $table->integer('tour_iddmdd');
            $table->text('tour_anhtour');
            $table->text('tour_ten');
            $table->dateTime('tour_ngaydi');
            $table->dateTime('tour_ngayve');
            $table->string('tour_soluongngay');
            $table->integer('tour_soluongnguoilon');
            $table->integer('tour_soluongtrem');
            $table->text('tour_mota');
            $table->text('tour_hienthi')->default(1);
            $table->boolean('tour_trangthai');
            $table->foreign('tour_idnv')->references('nv_id')->on('nhanvien')->onDelete('cascade');
            $table->foreign('tour_idncc')->references('ncc_id')->on('nhacungcap')->onDelete('cascade');
            $table->foreign('tour_iddmdd')->references('dmdd_id')->on('danhmucdiadiem')->onDelete('cascade');
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
        Schema::dropIfExists('tour');
    }
}
