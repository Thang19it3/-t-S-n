<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoiBong;
use App\ThanhVien;
use App\TTdoibong;
use App\Http\Controllers\Controller;

class DbController extends Controller
{
    public function indexDoibong()
    {
    	$doibong = DoiBong::all();
    	return view('admin.doibong.index',compact('doibong'));
    }
     public function getThem()
     {
     	return view('admin.doibong.them');
     }
    public function postThem(Request $request)
    {
    	$doibong = new DoiBong();
    	$doibong->TenDoiBong = $request->tendb;
    	$doibong->save();
    	return redirect('http://127.0.0.1:8000/admin/doibong/tendb/danhsach')->with('thongbao','them thanh cong');
    }
    public function indexTv()
    {
    	$tvdoibong = ThanhVien::all();
    	return view('admin.doibong.thanhvien.index',compact('tvdoibong'));
    }
     public function getThemTv()
     {
     	$doibong = DoiBong::all();
     	return view('admin.doibong.thanhvien.them',compact('doibong'));
     }
    public function postThemTv(Request $request)
    {
        $tvdoibong = new ThanhVien;
        $tvdoibong->DoiBong_id = $request->id_db;
        $tvdoibong->TenThanhVien = $request->tv;
        $tvdoibong->save();
        return redirect('admin/doibong/thanhvien/them')->with('thongbao','them thanh cong');
    }
     public function indexTt()
    {
        $ttdoibong = TTdoibong::all();
        return view('admin.doibong.thanhtich.index',compact('ttdoibong'));
    }
}
