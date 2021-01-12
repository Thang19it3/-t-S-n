<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    protected $table = 'pitch';
    public $primaryKey = 'pitch_id';	
    public $timestamps = false;
}
