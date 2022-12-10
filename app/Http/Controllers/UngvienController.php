<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UngvienController as ControllersUngvienController;
use App\Models\Ungvien;
use Illuminate\Http\Request;

class UngvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('job-search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job-search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ungvien = new Ungvien;
        $ungvien->MaUV = $request->MaUV;
        $ungvien->Hoten = $request->Hoten;
        $ungvien->email = $request->email;
        $ungvien->SDT = $request->SDT;
        $ungvien->Gioitinh = $request->Gioitinh;
        $ungvien->Ngaysinh = $request->Ngaysinh;
        $ungvien->Diachi = $request->Diachi;
        $ungvien->file_cv = $request->file_cv;

        $ungvien->save();
        return redirect()->action([ControllersUngvienController::class,'create']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
