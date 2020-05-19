<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SinhVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->integer('ma_sinh_vien');

            $table->string('email',100)->unique();

            $table->string('mat_khau',100);

            $table->string('ten_sinh_vien',100);

            $table->date('ngay_sinh');

            $table->string('dia_chi',100);

            $table->integer('so_dien_thoai');

            $table->boolean('gioi_tinh');

            $table->boolean('cap_do');

            $table->integer('ma_lop');

            $table->primary('ma_sinh_vien');

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
        Schema::dropIfExists('sinh_vien');
    }
}
