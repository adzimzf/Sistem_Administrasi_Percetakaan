<?php

namespace App\Http\Controllers;

use App\Models\JenisKertas;
use App\Models\SuratJalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

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
        $data->nama             = $request->input('nama-customer');
        $data->no_telepon       = $request->input('nomer-telp-customer');
        $data->biaya_edit       = $request->input('biaya-edit');
        $data->biaya_setting    = $request->input('biaya-setting');
        $data->tanggal          = $request->input('tanggal-bon');
        $data->jam              = date("H:i:s");
        $data->operator         = 1;

        $status = false;

        DB::transaction(function () use ($data, &$status) {
            if ($data->save()) {
                $status = true;
            }
        });
        if ($status) {
            Session::flash('message_designer_add_spk','Berhasil menambahkan data');
            return redirect()->action('DesignController@index');
        } else {

        }

    }
}
