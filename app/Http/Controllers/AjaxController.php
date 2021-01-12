<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;

class AjaxController extends Controller
{
     public function getLoaitin($idTheLoai)
    {
    	$loaitin = LoaiTin::where('TheLoai_id',$idTheLoai)->get();
    	foreach ($loaitin as $lt) {
    		echo"<option value='".$lt->id_LoaiTin."'>".$lt->TenLoaiTin."</option>";
    	}
    }
}
