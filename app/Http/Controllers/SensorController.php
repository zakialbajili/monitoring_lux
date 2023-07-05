<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use DB;

class SensorController extends Controller
{
    public function tampilsensor(){
        $data = Sensor::orderBy('id','desc')->limit(1)->get();
        return view('admin.index', compact('data'));
    }
    public function cobagrafik()
    {
        $data = Sensor::orderBy('id','desc')->limit(10)->get();
        return view('admin.cobagrafik', compact('data'));
    }
    public function inputdata(Request $request)
    {
        $data = array();
        $data['lux'] = $request->lux;
        $data['status'] = $request->status;
        $data = DB::table('sensors')->insert($data);
        return redirect('admin.index');
    }
    public function tampildata(){
        $data = Sensor::orderBy('id','desc')->limit(1)->get();
        return view('admin.sensor', compact('data'));
    }
    public function rekapdata(){
        $data=DB::table('sensors')->simplePaginate(15);
        return view('admin.rekapdata', compact('data'));
    }
}
