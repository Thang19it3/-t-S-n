<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoiBong;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\ThanhVien;
use Auth;

class ClubController extends Controller
{
    public function indexDk()
    {
    	return view('TrangChu.DoiBong.taodb');
    }
    public function getDk(Request $request)
    {
    	$dt = Carbon::now('Asia/Ho_Chi_Minh');
    	$doibong = new DoiBong;
    	$doibong->TenDoiBong = $request->tendoibong;
    	$doibong->TenVietTat = $request->tenvt;
    	$doibong->KhauHieu = $request->khauhieu;
    	$doibong->date_tl = $dt->toDateString();
    	if($request->hasFile('Logo'))
    	{
    		$file = $request->file('Logo');
    		$duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('TrangChu/DoiBong/them')->with('thongbao','Chỉ thêm được đuôi JPG ,PNG, JPEG');
            }
            $name = $file->getClientOriginalName();
            $Logo = Str::random(4)."_".$name;
            while (file_exists('upload/logo/'.$Logo)) {
               $Logo = Str::random(4)."_".$name;
           }
           $file->move('upload/logo',$Logo);
           $doibong->Logo=$Logo;
       }
       else
       {
          $doibong->Logo=" ";
      }
      if (Auth::check())
      {
         $id = Auth::user()->id;
         $doibong->id_user = $id;
     }  
     $doibong->save();
     return view('TrangChu.DoiBong.taodb1');
 }
 public function getDk2(Request $request)
 {
    $thanhvien = new ThanhVien();   
    if (Auth::check())
    {
     $id = Auth::user()->id;
     $thanhvien->id_user = $id;
 }   
 $thanhvien->SDT = $request->sdt;
 $thanhvien->ChucVu = $request->chucvu;
 $thanhvien->DoiBong_id = $request->doibong1;
 $thanhvien->TenThanhVien = $request->ten;
 $thanhvien->save();
 return view('TrangChu.DoiBong.taodb2');
}




public function indexDk1()
{
    $user = auth::user();
    $doibong = DoiBong::all();
    return view('TrangChu.DoiBong.taodb1')->with(['doibong'=>$doibong,'user'=>$user]);
}
public function indexDk2()
{
   return view('TrangChu.DoiBong.taodb2');
}
public function indexProfile()
{
    if(Auth::check())
    {
        $id = Auth::user()->id;
    }
    $doibong = DoiBong::all();
    $thanhvien = ThanhVien::all();
    return view('TrangChu.DoiBong.profile-club')->with(['thanhvien'=>$thanhvien,'doibong'=>$doibong]);
}
}
