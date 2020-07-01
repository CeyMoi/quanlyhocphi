<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->integer('ma_sinh_vien')->unsigned();
            $table->string('thang_hoc_phi');
            $table->string('nam_hoc_phi');
            $table->string('so_tien_dong');
            $table->date('ngay_dong');
            $table->integer('ma_ke_toan')->unsigned();

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
        Schema::dropIfExists('hoa_don');
    }
}
