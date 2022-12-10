<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TuyenDung;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vieclam = DB::table('vieclam')->join('nhatd','nhatd.MaCT','=','vieclam.MaCT')->get();
        return view('index',compact('vieclam'));
    }
    public function store(Request $request)
    {
        $tuyendung = new TuyenDung;
        $tuyendung->MaUV = $request->MaUV;
        $tuyendung->MaVL = $request->MaVL;
        $tuyendung->save();
        return redirect()->action([HomeController::class,'index']);
    }
}
