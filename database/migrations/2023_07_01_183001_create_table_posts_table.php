<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

class CreateTablePostsTable extends Migration
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
            $table->text('ncc_logo');
            $table->text('ncc_ten');
            $table->text('ncc_diachi');
            $table->text('ncc_email');
            $table->text('ncc_sodt');
            $table->text('ncc_ngayhoatdong');
            $table->text('ncc_makinhdoanh');
            $table->text('ncc_chusohuu');
            $table->text('ncc_tentknh1');
            $table->text('ncc_sotknh1');
            $table->text('ncc_tentknh2');
            $table->text('ncc_sotknh2');
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
