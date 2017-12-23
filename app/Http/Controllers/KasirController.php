<?php

namespace App\Http\Controllers;

use App\Models\SuratJalan;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function getData(Request $request)
    {
        $data = SuratJalan::all();
        return view('kasir.data', ['data'=>$data]);
    }

    public function getProcess(Request $request)
    {
        return view('kasir.process');
    }
}
