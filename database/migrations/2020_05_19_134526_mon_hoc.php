<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MonHoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_hoc', function (Blueprint $table) {
            $table->integer('ma_mon_hoc');

            $table->string('ten_mon_hoc');

            $table->integer('ma_nganh');

            $table->integer('ma_khoa');

            $table->primary('ma_mon_hoc');

            $table->foreign('ma_nganh')
                ->references('ma_nganh')->on('chuong_trinh_dao_tao');

            $table->foreign('ma_khoa')
                ->references('ma_khoa')->on('khoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mon_hoc');
    }
}
