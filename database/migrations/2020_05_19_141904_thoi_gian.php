<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThoiGian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thoi_gian', function (Blueprint $table) {
            $table->integer('ma_sinh_vien');

            $table->date('ngay_dong');

            $table->integer('so_tien');

            $table->integer('ma_ke_toan');

            $table->primary(['ma_sinh_vien', 'ngay_dong']);

            $table->foreign('ma_ke_toan')
                ->references('ma_ke_toan')->on('ke_toan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thoi_gian');
    }
}
