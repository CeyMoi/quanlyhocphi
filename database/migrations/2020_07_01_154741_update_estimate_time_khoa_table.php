<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEstimateTimeKhoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('khoa', function (Blueprint $table) {
            $table->date('thoi_gian_bat_dau');
            $table->date('thoi_gian_ket_thuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('khoa', function (Blueprint $table) {
            $table->dropColumn(['thoi_gian_bat_dau', 'thoi_gian_ket_thuc']);
        });
    }
}
