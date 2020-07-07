<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_don';
    public $timestamps = false;
    public $dates = ['ngay_dong'];
}
