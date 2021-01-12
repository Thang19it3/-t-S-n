<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
     protected $table = "LoaiTin";
    public $timestamps = false;
    protected $primaryKey = 'id_LoaiTin';
	public function theloai()
	{
		return $this->belongsTo('App\TheLoai','TheLoai_id','id_TheLoai');
	}
	public function tintuc()
	{
		return $this->hasMany('App\TinTuc','LoaiTin_id','id_LoaiTin');
	}
}
