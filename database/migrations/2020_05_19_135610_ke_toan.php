<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KeToan extends Migration
{
    
    public function up()
    {
        Schema::create('ke_toan', function (Blueprint $table) {
            $table->integer('ma_ke_toan')->unsigned();

            $table->string('email',100)->unique();

            $table->string('mat_khau',100);

            $table->string('ten_ke_toan',100);

            $table->date('ngay_sinh');

            $table->string('dia_chi',100);

            $table->integer('so_dien_thoai')->unsigned();

            $table->boolean('gioi_tinh');

            $table->boolean('cap_do');

            $table->primary('ma_ke_toan');
         });
    }

  
    public function down()
    {
        Schema::dropIfExists('ke_toan');
    }
}
