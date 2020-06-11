<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChuongTrinhDaoTao extends Migration
{

    public function up()
    {
        Schema::create('chuong_trinh_dao_tao', function (Blueprint $table) {
            $table->integer('ma_nganh')->unsigned();

            $table->string('ten_nganh', 100);

            $table->primary('ma_nganh');
        });
    }


    public function down()
    {
        Schema::dropIfExists('chuong_trinh_dao_tao');
    }
}
