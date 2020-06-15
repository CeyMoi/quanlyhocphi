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

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }
}
