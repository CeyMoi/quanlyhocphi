<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HocPhiTheoChuongTrinhDaoTao extends Migration
{

    public function up()
    {
        Schema::create('hoc_phi_theo_chuong_trinh_dao_tao', function (Blueprint $table) {
            $table->integer('ma_mon_hoc')->unsigned();

            $table->integer('ma_lop')->unsigned();

            $table->integer('so_tien')->unsigned();

            $table->primary(['ma_mon_hoc', 'ma_lop']);

            $table->foreign('ma_mon_hoc')
                ->references('ma_mon_hoc')->on('mon_hoc');

            $table->foreign('ma_lop')
                ->references('ma_lop')->on('lop');
        });
    }


    public function down()
    {
        Schema::dropIfExists('hoc_phi_theo_chuong_trinh_dao_tao');
    }
}
