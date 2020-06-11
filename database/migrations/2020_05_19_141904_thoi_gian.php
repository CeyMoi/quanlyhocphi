<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThoiGian extends Migration
{
    
    public function up()
    {
        Schema::create('thoi_gian', function (Blueprint $table) {
            $table->integer('ma_sinh_vien')->unsigned();

            $table->date('ngay_dong');

            $table->integer('so_tien')->unsigned();

            $table->integer('ma_ke_toan')->unsigned();

            $table->primary(['ma_sinh_vien', 'ngay_dong']);

            $table->foreign('ma_ke_toan')
                ->references('ma_ke_toan')->on('ke_toan');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('thoi_gian');
    }
}
