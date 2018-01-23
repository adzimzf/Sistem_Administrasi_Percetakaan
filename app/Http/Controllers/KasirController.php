<?php

namespace App\Http\Controllers;

use App\Models\SuratJalan;
use App\Models\SuratJalanDetail;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function getData(Request $request)
    {
        $data = SuratJalan::all();
        return view('kasir.data', ['data'=>$data]);
    }

    public function getProcess($id)
    {
        $suratJalan  = SuratJalan::where(['id'=>$id])->first();
        $suratJalanDetail = SuratJalanDetail::where(['surat_jalan_id'=>$suratJalan->id])->get();
        return view('kasir.process', ['suratJalan'=>$suratJalan, 'suratJalanDetail'=>$suratJalanDetail]);
    }
}
