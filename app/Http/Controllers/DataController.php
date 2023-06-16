<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DataController;
use Illuminate\Http\Request;
use App\Models\Iot;
use DB;

class DataController extends Controller
{
    public function tampildata(){
        return view('pasien.tampildata');
    }
    public function tampilsuhu()
    {
        $data = Iot::orderBy('id','asc')->limit(5)->get();
        return view('pasien.tampilsuhu', compact('data'));
    }
    public function inputdata(Request $request)
    {
        $data = array();
        $data['suhu'] = $request->suhu;
        $data['kelembaban'] = $request->kelembaban;
        $data = DB::table('iots')->insert($data);

        return redirect('pasien/tampilsuhu');
    }
    public function tampilgrafik()
    {
        $datasuhu = Iot::orderBy('id','asc')->get();
        return view('pasien.tampilgrafik', compact('datasuhu'));
    }


}
