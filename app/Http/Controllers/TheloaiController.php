<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;
use App\TinTuc;

class TheloaiController extends Controller
{
    public function indexTheLoai()
    {
    	$theloai = TheLoai::simplePaginate(2);
    	return view('admin.theloai.index',compact('theloai'));
    }
    public function getTheLoai()
    {
    	return view('admin.theloai.index');
    }
    public function addTheLoai(Request $request)
    {
        $this->validate($request,
            [
                'tentheloai' => 'required|min:3|max:100'
            ],
            [
                'tentheloai.required' => 'Bạn chưa nhập thể loại',
                'tentheloai.min' => 'Tên thể loại có 3 ký tự đến 100',
                'tentheloai.max' => 'Tên thể loại có 3 ký tự đến 100',
            ]);
    	$theloai = new TheLoai();
    	$theloai->TenTheLoai = $request->tentheloai;
    	$theloai->save();
    	return redirect('http://127.0.0.1:8000/admin/theloai/danhsach')->with('thongbao','them thanh cong');
    }
    public function delTheLoai($id)
    {
    	TheLoai::where('id_TheLoai',$id)->delete();
    	return back()->with('theloai_delete','Xóa Thành Công');
    }
    public function editTheLoai($id)
    {
    	$theloai = TheLoai::where('id_TheLoai',$id)->first();
    	return view('admin.theloai.sua',compact('theloai'));
    }
    public function updateTheLoai(Request $request,$id)
    {
        $theloai = TheLoai::where('id_TheLoai',$id)->first();
        $this->validate($request,
            [
                'tentheloai' => 'required|unique:TheLoai,tentheloai|min:3|max:100'
            ]
            ,[
                'tentheloai.required' =>'Bạn chưa nhập tên thể loại',
                'tentheloai.unque' => 'Tên Thể loại tồn tại'
            ]);
        $theloai->TenTheLoai = $request->tentheloai;
        $theloai->save();
        return redirect('admin/theloai/sua/'.$id)->with('thongbao','Sửa thanh cong');
    }
}
