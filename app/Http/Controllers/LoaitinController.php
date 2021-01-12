<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;


class LoaitinController extends Controller
{
     public function indexLoaiTin()
    {
    	$loaitin = LoaiTin::simplePaginate(3);
    	return view('admin.loaitin.index',compact('loaitin'));
    }
    public function getLoaiTin()
    {
    	$theloai = TheLoai::all();
    	return view('admin.loaitin.them',compact('theloai'));
    }
    public function addLoaiTin(Request $request)
    {
    	$loaitin = new LoaiTin;
    	$loaitin->TenLoaiTin = $request->loaitin;
    	$loaitin->TheLoai_id = $request->theloai;
    	$loaitin->save();
    	return redirect('admin/loaitin/them')->with('thongbao','them thanh cong');
    }
    public function delLoaiTin($id)
    {
    	LoaiTin::where('id_LoaiTin',$id)->delete();
    	return redirect('admin/loaitin/danhsach')->with('thongbao','Xóa thanh cong');
    }
    public function editLoaiTin($id)
    {
    	$loaitin = LoaiTin::where('id_LoaiTin',$id)->first();
    	return view('admin.loaitin.sua',compact('loaitin'));
    }
    public function updateLoaiTin(Request $request,$id)
    {
    	$loaitin = LoaiTin::where('id_LoaiTin',$id)->first();
    	 $loaitin->TenLoaiTin = $request->loaitin;
        $loaitin->save();
        return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Sửa thanh cong');
    }
}
