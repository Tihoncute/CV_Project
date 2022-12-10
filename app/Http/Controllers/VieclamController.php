<?php

namespace App\Http\Controllers;

use App\Models\Vieclam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VieclamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vieclam = DB::table('vieclam')->join('nhatd','nhatd.MaCT','=','vieclam.MaCT')->get();
        return view('index',compact('vieclam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('published-recruitment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vieclam = new Vieclam;
        $vieclam->MaCT = $request->MaCT;
        $vieclam->Tieude = $request->Tieude;
        $vieclam->SoLuongTuyen = $request->SoLuongTuyen;
        $vieclam->Gioitinh	= $request->Gioitinh;
        $vieclam->Mota = $request->Mota;
        $vieclam->Yeucau = $request->Yeucau;
        $vieclam->Kinhnghiem = $request->Kinhnghiem;
        $vieclam->Mucluong = $request->Mucluong;
        $vieclam->Nganhnghe = $request->Nganhnghe;
        $vieclam->Diachi = $request->Diachi;
        $vieclam->Hannop = $request->Hannop;
        $vieclam->save();
        return redirect()->action([VieclamController::class,'create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vieclam = DB::table('vieclam')->join('nhatd','nhatd.MaCT','=','vieclam.MaCT')->join('users','nhatd.MaCT','users.id')->where('MaVL','=',$id)->first();
        return view('jd-page',compact('vieclam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vieclam = Vieclam::where('MaVL','=',$id)->first();
        return view('published-recruitment-update',compact('vieclam'));
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
        $vieclam = Vieclam::where('MaVL','=',$id)->first();
        $vieclam->MaCT = $request->MaCT;
        $vieclam->Tieude = $request->Tieude;
        $vieclam->SoLuongTuyen = $request->SoLuongTuyen;
        $vieclam->Gioitinh	= $request->Gioitinh;
        $vieclam->Mota = $request->Mota;
        $vieclam->Yeucau = $request->Yeucau;
        $vieclam->Kinhnghiem = $request->Kinhnghiem;
        $vieclam->Mucluong = $request->Mucluong;
        $vieclam->Nganhnghe = $request->Nganhnghe;
        $vieclam->Diachi = $request->Diachi;
        $vieclam->Hannop = $request->Hannop;
        $vieclam->save();
        return redirect()->action([VieclamController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vieclam1 = Vieclam::where('MaVL','=',$id)->delete();

        return redirect()->action([HomeController::class,'index']);
    }
}
