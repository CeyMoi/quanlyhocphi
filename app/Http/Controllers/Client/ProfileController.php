<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = \Auth::guard('sinh_vien')->user();
    	return view('client.profile.index', compact('user'));
    }

    public function update(Request $request, $id = null)
    {
        
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $data = $request->all(['password', 'password_new']);
        $user = \Auth::guard('sinh_vien')->user();
        if (\Hash::check($data['password'], $user->mat_khau)) {
            $user->mat_khau = bcrypt($data['password_new']);
            $user->save();
            return redirect()->back()->with('success', 'Đổi mật khẩu thành công');
        }
        return redirect()->back()->with('error', 'Mật khẩu cũ không đúng');

    }
}
