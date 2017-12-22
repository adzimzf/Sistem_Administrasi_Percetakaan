<?php

namespace App\Http\Controllers;

use App\Models\JenisKertas;
use App\Models\SuratJalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesignController extends Controller
{
    public function index(Request $request)
    {
        $jenisKertas    = JenisKertas::all();
        return view('designer.insert', ['jenisKertas'=>$jenisKertas]);
    }

    public function insert(Request $request)
    {
        $this->validate($request,[
            'nomer-bon'             => "required",
            'tanggal-bon'           => "required",
            'nama-customer'         => "required",
            'nomer-telp-customer'   => "required"
        ]);

        $data = new SuratJalan();
        $data->id               = $request->input('nomer-bon');
        $data->nama             = $request->input('tanggal-bon');
        $data->no_telepon        = $request->input('nama-customer');
        $data->biaya_edit       = $request->input('biaya-edit');
        $data->biaya_setting    = $request->input('biaya-setting');
        $data->tanggal          = $request->input('tanggal-bon');
        $data->jam              = date("H:i:s");
        $data->operator         = 1;

        DB::transaction(function () use ($data) {
            $data->save();
        });
    }
}
