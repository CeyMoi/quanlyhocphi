<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
