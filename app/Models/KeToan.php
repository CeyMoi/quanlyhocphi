<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeToan extends Model
{
    protected $table = 'ke_toan';
    protected $primaryKey = 'ma_ke_toan';
    public $timestamps = false;
}
