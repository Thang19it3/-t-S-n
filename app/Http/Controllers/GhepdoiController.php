<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoiBong;
use App\TranDau;
use App\ThanhVien;
use Auth;

class GhepdoiController extends Controller
{
    public function index4()
    {
        $doibong = DoiBong::where('trandau',0)->get();
        return view('tim-db',compact('doibong'));
    }
    public function index5($id)
    {
        $tv = ThanhVien::all();
    	$doibong = DoiBong::find($id);
    	return view('tim-db2',['tv'=>$tv,'doibong'=>$doibong]);
    }
    public function ghepDoi(Request $request ,$id)
    {
     if(Auth::check())
    {
        $id = Auth::user()->id;
    }   
    	$doibong = DoiBong::find($id);
    	$trandau = new TranDau;
    	$trandau->id_doibong1 = $request->db1;
    	$trandau->id_doibong2 = $request->db2;
    	$trandau->time = $request->gio;
    	$trandau->ngay = $request->ngay;
    	$trandau->save();
    	return view('tim-db-tc')->with(['doibong'=>$doibong]);
    }
    public function lich()
    {
        if(Auth::check())
    {
        $id = Auth::user()->id;
    }   
        $doibong = DoiBong::all();
        $trandau = TranDau::all();
        return view('lichthidau',['doibong'=>$doibong,'trandau'=>$trandau]);
    }
}
