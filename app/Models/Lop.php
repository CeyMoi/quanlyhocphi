<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $table = 'lop';
    protected $primaryKey = 'ma_lop';
    public $timestamps = false;

    public function nganh()
    {
    	return $this->belongsTo('App\Models\ChuongTrinhDaoTao', 'ma_nganh');
    }

    public function khoa()
    {
    	return $this->belongsTo('App\Models\Khoa', 'ma_khoa');
    }
}
