<?php

namespace App\Http\Controllers;

use App\Maintext;

class MaintextController extends Controller
{
    public function  getIndex($url=null){
        $obj=Maintext::where('url', $url)->first();
        return view('static', compact('obj'));
    }
    public function getAll(){
        $arr=Maintext::all();
        return view('all', compact('arr'));
    }
}
