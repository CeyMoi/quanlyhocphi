<?php

namespace App\Http\Controllers\Client\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	use AuthenticatesUsers;


	protected $redirectTo = '/client';

    public function index()
    {
    	return view('client.auth.login');
    }


    public function guard()
    {
        return Auth::guard('sinh_vien');
    }

    public function store(Request $request)
    {

    }
}
