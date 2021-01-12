<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubPitch extends Model
{
    protected $table = 'subpitch';
    public $primaryKey = 'sub_pitch_id';	
    public $timestamps = false;
}
