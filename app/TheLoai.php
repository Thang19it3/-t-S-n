<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
     protected $table = "TheLoai";
    public $timestamps = false;
    protected $primaryKey = 'id_TheLoai';
	public function loaitin()
	{
		return $this->hasMany('App\LoaiTin','TheLoai_id','id_TheLoai');
	}
	public function tintuc()
	{
		return $this->hasManyThrough('App\TinTuc','App\LoaiTin','TheLoai_id','LoaiTin_id','id_TheLoai');
	}
}
