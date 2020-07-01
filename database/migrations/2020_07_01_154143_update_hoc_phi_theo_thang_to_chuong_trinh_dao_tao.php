<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHocPhiTheoThangToChuongTrinhDaoTao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chuong_trinh_dao_tao', function (Blueprint $table) {
            $table->string('hoc_phi_theo_thang', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chuong_trinh_dao_tao', function (Blueprint $table) {
            $table->dropColumn('hoc_phi_theo_thang');
        });
    }
}
