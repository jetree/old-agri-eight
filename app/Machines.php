<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    protected $fillable = ['machine_name'];

    public function conditions(){
        return $this->hasMany('App\Condition');
    }
}
