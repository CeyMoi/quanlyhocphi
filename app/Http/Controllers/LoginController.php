<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeToan;
use Exception;

class LoginController  extends Controller
{
    function view_login()
    {
        return view('view_login');
    }
    public function process_login(Request $rq)
    {
        $email = $rq->get('email');
        $mat_khau = $rq->get('mat_khau');
        try {
            $ke_toan = KeToan::where('email', $email)
                ->where('mat_khau', $mat_khau)
                ->firstOrFail();

            $rq->session()->put('ten_ke_toan', $ke_toan->ten_ke_toan);
            $rq->session()->put('ma_ke_toan', $ke_toan->ma_ke_toan);

            return redirect()->route('welcome');
        } catch (Exception $e) {

            return redirect()->route('view_login')->with('error', 'Đăng nhập sai!');
        }
    }
}
