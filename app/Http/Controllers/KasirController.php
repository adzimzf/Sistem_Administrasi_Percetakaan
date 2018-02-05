<?php

namespace App\Http\Controllers;

use App\Models\JenisCetakan;
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
        $suratJalan         = SuratJalan::where(['id'=>$id])->first();
        $suratJalanDetail   = SuratJalanDetail::where(['surat_jalan_id'=>$suratJalan->id])->get();
        return view('kasir.process', ['suratJalan'=>$suratJalan, 'suratJalanDetail'=>$suratJalanDetail, 'edit'=>true]);
    }

    public function getDetail($id)
    {
        $suratJalan  = SuratJalan::where(['id'=>$id])->first();
        $suratJalanDetail = SuratJalanDetail::where(['surat_jalan_id'=>$suratJalan->id])->get();
        return view('kasir.process', ['suratJalan'=>$suratJalan, 'suratJalanDetail'=>$suratJalanDetail, 'edit'=>false]);
    }

    public function setHarga(Request $request)
    {
        //update data surat jalan
        $suratJalan = SuratJalan::where(['id'=>$request->input("id")]);
        $suratJalan->update([
            "total1"        =>$request->input("total1"),
            "total2"        =>$request->input("total2"),
            "uang_muka"     =>$request->input("uang-muka"),
            "sisa"          =>$request->input("sisa")
        ]);

        $dataDetail = json_decode($request->input("data-detail"));
        foreach ($dataDetail as $dataDetail) {
            $suratJalanDetail = SuratJalanDetail::where(["id"=>$dataDetail->detail_id])
                ->update([
                    "harga_satuan"    => $dataDetail->harga_satuan,
                    "harga_jumlah"    => $dataDetail->harga_jumlah,
                ]);
        }

        return "ok";
    }
}
