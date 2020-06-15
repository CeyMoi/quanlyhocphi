<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class SinhVien extends Authenticatable
{
	use Notifiable;

	protected $guard = 'sinh_vien';

    protected $table = 'sinh_vien';

    protected $primaryKey = 'ma_sinh_vien';

    public $timestamps = false;

    protected $hidden = ['mat_khau'];

    protected $dates = ['ngay_sinh'];

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }

    public function lop()
    {
    	return $this->belongsTo('App\Models\Lop', 'ma_lop');
    }
}
