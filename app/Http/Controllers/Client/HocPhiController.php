<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HocPhiController extends Controller
{
    public function index()
    {
    	$student = \Auth::guard('sinh_vien')->user();
    	// dd($student, $student->lop, $student->hoaDons->sum('so_tien_dong'));
    	$hoc_phi = [
    		'theo_thang' => $student->lop->nganh->hoc_phi_theo_thang,
    		'theo_nam' => $student->lop->nganh->hoc_phi_theo_thang * 10,
    		'current_year' => $student->hoaDons()->whereYear('ngay_dong', date('Y'))->sum('so_tien_dong'),
    		'total' => $student->hoaDons->sum('so_tien_dong'),
		];
    	if ($hoc_phi['current_year'] > $hoc_phi['theo_nam']) {
    		$hoc_phi['status'] = 'Thừa';
    	} else if ($hoc_phi['current_year'] == $hoc_phi['theo_nam']) {
    		$hoc_phi['status'] = 'Hoàn thành';
    	} else {
    		$hoc_phi['status'] = 'Nợ';
		}
    	return view('client.hoc-phi.index', compact('student', 'hoc_phi'));
    }
}
