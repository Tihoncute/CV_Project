<?php

namespace App\Http\Controllers;

use App\Models\Nhatd;
use Illuminate\Http\Request;

class NhaTDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $nhatd = new Nhatd;
        $nhatd->MaCT = $request->MaCT;
        $nhatd->TenCT = $request->TenCT;
        $nhatd->TenNLH = $request->TenNLH;
        $nhatd->email = $request->email;
        $nhatd->Diachi = $request->Diachi;
        $nhatd->SDT = $request->SDT;
        $nhatd->logo = $request->logo;
        $nhatd->save();
        return redirect()->action([NhaTDController::class,'create']);
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
