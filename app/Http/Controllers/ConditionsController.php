<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condition;

class ConditionsController extends Controller
{
    public function index(){
        $condition = Condition::all();
        return $condition;
    }
}
