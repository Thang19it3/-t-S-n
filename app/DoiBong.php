<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoiBong extends Model
{
    protected $table = "doibong";
    public $timestamps = false;
    protected $primaryKey = 'id';
	 public function Thanhvien()
	{
		return $this->hasMany('App\ThanhVien','DoiBong_id','id');
	}
}
