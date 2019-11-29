<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condition;

class ConditionsController extends Controller
{
    public function index(){
        // 最新データ３０件を取得
        $conditions = Condition::latest()->limit(30)->get();
        return $conditions->toArray();
    }

    public function show($int){
        // 最新データ３０件を取得
        $conditions = Condition::latest()->limit($int)->get();
        return $conditions->toArray();
    }
}
