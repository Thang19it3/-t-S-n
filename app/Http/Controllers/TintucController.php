<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tintuc;
use App\TheLoai;
use App\LoaiTin;
use App\DoiBong;

class TintucController extends Controller
{
     public function index()
    {
        return view('admin.layout.index');
    }
     public function index1()
    {
         $tintucnoibat = Tintuc::where('NoiBat',1)->take(2)->get();
         $tintuc1 = Tintuc::where('id_tintuc',6)->take(1)->get();
        return view('trangchu',['tintucnoibat'=>$tintucnoibat,'tintuc1'=>$tintuc1]);
    }
     public function index2()
    {
        return view('lienhe');
    }
      public function index3()
    {
        return view('doibong');
    }
    public function indexTintuc()
    {
    	$tintuc = Tintuc::simplePaginate(2);
    	return view('admin.tintuc.index',compact('tintuc'));
    }
     public function getThem()
    {
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
    	return view('admin.tintuc.them',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    }
    public function postThem(Request $request)
    {
    	$tintuc = new Tintuc;
    	$tintuc->TieuDe = $request->tentheloai;
    	$tintuc->TomTat = $request->tomtat;
    	$tintuc->NoiDung = $request->noidung;
        $tintuc->LoaiTin_id = $request->loaitin;
    	$tintuc->NoiBat = $request->noibat;
        if($request->hasFile('Hinh'))
        {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/tinuc/them')->with('thongbao','Chỉ thêm được đuôi JPG ,PNG, JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name;
            while (file_exists('upload/Tintuc/'.$Hinh)) {
                 $Hinh = Str::random(4)."_".$name;
            }
            $file->move('upload/Tintuc',$Hinh);
            $tintuc->Hinh=$Hinh; 
        }
        else
        {
            $tintuc->Hinh="";
        }
        $tintuc->save();
        return redirect('http://127.0.0.1:8000/admin/tinuc/them')->with('thongbao','Thêm thành công');
    }
    public function editLoaiTin($id)
    {
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
        $tintuc = Tintuc::find($id);
        return view('admin.tintuc.sua',['tintuc'=>$tintuc,'theloai'=>$theloai,'loaitin'=>$loaitin]);
    }
    public function updateLoaiTin(Request $request,$id)
    {
        $tintuc = Tintuc::find($id);
        $tintuc->TieuDe = $request->tentheloai;
        $tintuc->TomTat = $request->tomtat;
        $tintuc->NoiDung = $request->noidung;
        $tintuc->LoaiTin_id = $request->loaitin;
        $tintuc->NoiBat = $request->noibat;
        
        if($request->hasFile('Hinh'))
        {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/tinuc/them')->with('thongbao','Chỉ thêm được đuôi JPG ,PNG, JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name;
            while (file_exists('upload/Tintuc/'.$Hinh)) {
                 $Hinh = Str::random(4)."_".$name;
            }
            $file->move('upload/Tintuc',$Hinh);
            unlink('upload/Tintuc/'.$tintuc->Hinh);
            $tintuc->Hinh=$Hinh; 
        }
        else
        {
        }
        $tintuc->save();
        return redirect('http://127.0.0.1:8000/admin/tintuc/sua/'.$id)->with('thongbao','sửa thành công');
    }
    public function delTheLoai($id)
    {
        $tintuc = Tintuc::find($id);
        $tintuc->delete();
         return redirect('admin/tinuc/danhsach')->with('thongbao','xóa thành công');
    }
}
