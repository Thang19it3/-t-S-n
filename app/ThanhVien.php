<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    protected $table = "thanhvien";
    public $timestamps = false;
    protected $primaryKey = 'id';
    public function doibong()
	{
		return $this->belongsTo('App\DoiBong','DoiBong_id','id');
	}
}
