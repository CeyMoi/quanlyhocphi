<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HocPhi extends Migration
{
   
    public function up()
    {
        Schema::create('hoc_phi', function (Blueprint $table) {
            $table->integer('ma_sinh_vien')->unsigned();

            $table->integer('tong_hoc_phi');

            $table->boolean('tinh_trang');

            $table->primary('ma_sinh_vien');

            $table->foreign('ma_sinh_vien')
                ->references('ma_sinh_vien')->on('sinh_vien');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('hoc_phi');
    }
}
