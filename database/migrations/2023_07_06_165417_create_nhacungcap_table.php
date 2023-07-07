<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

class CreateTableNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->increments('ncc_id');
            $table->string('ncc_logo')->nullable();
            $table->string('ncc_ten');
            $table->string('ncc_diachi');
            $table->string('ncc_email');
            $table->string('ncc_sodt');
            $table->date('ncc_ngayhoatdong');
            $table->string('ncc_makinhdoanh');
            $table->string('ncc_chusohuu');
            $table->string('ncc_tentknh1');
            $table->string('ncc_sotknh1');
            $table->string('ncc_tentknh2');
            $table->string('ncc_sotknh2');
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
        Schema::dropIfExists('nhacungcap');
    }
}
