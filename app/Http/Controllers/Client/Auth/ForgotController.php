<?php

namespace App\Http\Controllers\Client\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ResetPasswordRequest;
use App\Models\SinhVien;
use App\Mail\ForgotPassword;

class ForgotController extends Controller
{
    public function index()
    {
        return view('client.auth.forgot');
    }

    public function forgot(Request $request)
    {
        $sinhVien = SinhVien::where('email', $request->input('email'))->first();
        if (empty($sinhVien)) {
            return \redirect()->back()->with('error', 'Email không tồn tại trên hệ thống');
        }
        $sinhVien->token_hash = sha1(time());
        $sinhVien->save();
        \Mail::to($sinhVien->email)->send(new ForgotPassword($sinhVien));
        return \redirect()->back()->with('success', 'Vui lòng kiểm tra hòm thư');
    }

    public function reset($token)
    {
        $sinhVien = SinhVien::where('token_hash', $token)->first();
        if (empty($sinhVien)) {
            return \redirect()->route('client.auth.forgot.index')->with('error', 'Mã token không hợp lệ');
        }
        return view('client.auth.reset_password', compact('token'));
    }

    public function postReset(ResetPasswordRequest $request)
    {
        $tokenHash = $request->input('token_hash');
        $password = $request->input('password');
        $sinhVien = SinhVien::where('token_hash', $tokenHash)->first();
        if (empty($sinhVien)) {
            return \redirect()->back()->with('error', 'Mã token không hợp lệ');
        }
        $sinhVien->mat_khau = bcrypt($password);
        $sinhVien->token_hash = sha1(time());
        $sinhVien->save();
        // return \redirect()->route('client.auth.forgot.index')->with('success', 'Cập nhật mật khẩu mới thành công');
        return redirect()->route('client.auth.login')->with('success', 'Cập nhật mật khẩu mới thành công');
    }
}