<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use DB;

class SensorController extends Controller
{
    public function tampilsensor(){
        $data = Sensor::orderBy('id','desc')->limit(5)->get();
        return view('tampilsensor', compact('data'));
    }
    public function cek(){
        $data = Sensor::orderBy('id','desc')->limit(5)->get();
        return view('cek', compact('data'));
    }
        //
}
