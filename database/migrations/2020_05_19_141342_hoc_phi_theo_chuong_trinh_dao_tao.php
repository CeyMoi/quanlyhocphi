<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HocPhiTheoChuongTrinhDaoTao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoc_phi_theo_chuong_trinh_dao_tao', function (Blueprint $table) {
            $table->integer('ma_mon_hoc');

            $table->integer('ma_lop');

            $table->integer('so_tien');

            $table->primary(['ma_mon_hoc', 'ma_lop']);

            $table->foreign('ma_mon_hoc')
                ->references('ma_mon_hoc')->on('mon_hoc');

            $table->foreign('ma_lop')
                ->references('ma_lop')->on('lop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoc_phi_theo_chuong_trinh_dao_tao');
    }
}
