<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = "TinTuc";
     public $timestamps = false;
     protected $primaryKey = 'id_tintuc';
     public function loaitin()
	{
		return $this->belongsTo('App\LoaiTin','LoaiTin_id','id_LoaiTin');
	}
}
