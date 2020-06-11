<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lop;

class LopController extends Controller
{

    public function index(Request $request)
    {
        $ten_lop = $request->get('ten_lop');
        $array_lop = Lop::where('ten_lop', 'like', "%$ten_lop%")->paginate(2);
        return view('khoa.index', compact('array_lop', 'ten_lop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lop = new Lop();
        $lop->ma_lop = $request->get('ma_lop');
        $lop->ten_lop = $request->get('ten_lop');

        $lop->save();
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
        $lop = Lop::where('ma_lop', $id)->first();
        return view('lop.edit', compact('lop'));
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
        $lop = Lop::where('ma_lop', $id)->first();
        $lop->ma_lop = $request->get('ma_lop');
        $lop->ten_lop = $request->get('ten_lop');
        $lop->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lop::where('ma_lop', $id)->delete();
    }
}
