<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khoa;

class KhoaController extends Controller
{
    
    public function index(Request $request)
    {
        $ten_khoa = $request->get('ten_khoa');
        $array_khoa = Khoa::where('ten_khoa', 'like', "%$ten_khoa%")->paginate(2);
        return view('khoa.index', compact('array_khoa', 'ten_khoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('khoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khoa           = new Khoa();
        $khoa->ma_khoa  = $request->get('ma_khoa');
        $khoa->ten_khoa = $request->get('ten_khoa');
        $khoa->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $giao_vu = Khoa::where('ma', $id)->first();
        return view('khoa.edit', compact('khoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $khoa           = Khoa::where('ma_khoa', $id)->first();
        $khoa->ma_khoa  = $request->get('ma_khoa');
        $khoa->ten_khoa = $request->get('ten_khoa');
        $khoa->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Khoa::where('ma_khoa', $id)->delete();
    }
}
