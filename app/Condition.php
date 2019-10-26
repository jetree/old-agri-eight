<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = ['machine_id','temp','water_temp'];

    public function machine(){
        return $this->belongsTo('App\machine');
    }
}
