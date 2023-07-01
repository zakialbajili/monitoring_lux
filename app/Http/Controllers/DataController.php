<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DataController;
use Illuminate\Http\Request;
use App\Models\Iot;

use DB;

class DataController extends Controller
{
    public function cek(){
        return view('cek');
    }
    public function tampildata(){
        return view('pasien.tampildata');
    }
    public function tampilcek(){
        return view('pasien.cek');
    }
    public function tampilsuhu()
    {
        $data = Iot::orderBy('id','asc')->limit(5)->get();
        return view('pasien.tampilsuhu', compact('data'));
    }
    public function inputdata(Request $request)
    {
        $data = array();
        $data['lux'] = $request->lux;
        $data['status'] = $request->status;
        $data = DB::table('sensor')->insert($data);
        return redirect('pasien/tampilsuhu');
    }
    public function tampilgrafik()
    {
        $datasuhu = Iot::orderBy('id','asc')->get();
        return view('pasien.tampilgrafik', compact('datasuhu'));
    }


}
