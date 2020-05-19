<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChuongTrinhDaoTao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuong_trinh_dao_tao', function (Blueprint $table) {
            $table->integer('ma_nganh');

            $table->string('ten_nganh', 100);

            $table->primary('ma_nganh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chuong_trinh_dao_tao');
    }
}
