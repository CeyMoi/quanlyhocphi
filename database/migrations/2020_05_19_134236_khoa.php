<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Khoa extends Migration
{
    
    public function up()
    {
        Schema::create('khoa', function (Blueprint $table) {
            $table->integer('ma_khoa')->unsigned();

            $table->string('ten_khoa', 100);
            
            $table->primary('ma_khoa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('khoa');
    }
}
