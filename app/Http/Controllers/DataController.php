<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DataController;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function tampildata(){
        return view('pasien.tampildata');
    }
}
