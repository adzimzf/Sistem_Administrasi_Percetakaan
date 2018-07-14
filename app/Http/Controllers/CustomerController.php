<?php
/**
 * Created by PhpStorm.
 * User: nakama
 * Date: 11/07/18
 * Time: 7:20
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\VarDumper\Tests\Fixtures\bar;


class CustomerController extends Controller
{
    public function login(Request $request){
        $userID = $request->input("nomor_telp");
        $password = $request->input("password");

        $dataUser = DB::table("customer")->where(["nomor_telp"=>$userID, "password"=>$password])->get();
        if (sizeof($dataUser) != 0) {
            return response()->json([
                'error' => false,
            ]);
        }else{
            return response()->json([
                'error' => true,
            ]);
        }
    }

    public function register(Request $request){
        $noTelp = $request->input("nomor_telp");
        $nama = $request->input("nama");
        $email = $request->input("email");
        $password = $request->input("password");

        $dataUser = DB::table("customer")->insert([
            "nama"=>$nama,
            "email"=>$email,
            "nomor_telp"=>$noTelp,
            "password"=>$password,
        ]);

        if ($dataUser) {
            return response()->json([
                    "error"=>false
            ]);
        }else{
            return response()->json([
                "error"=>true
            ]);
        }


    }
    public function getOrder(Request $request){
        $id = $request->input("id");

        if ($id==""){
            return response()->json([
                "error"=>true
            ]);
        }

        try{
            $all = DB::select(DB::raw("SELECT * FROM `surat_jalan`
JOIN `surat_jalan_detail` ON `surat_jalan`.`id`=`surat_jalan_detail`.`surat_jalan_id`
WHERE`surat_jalan`.`id`='$id'"));

            $done = DB::select(DB::raw("SELECT * FROM `surat_jalan`
JOIN `surat_jalan_detail` ON `surat_jalan`.`id`=`surat_jalan_detail`.`surat_jalan_id`
WHERE `surat_jalan_detail`.`done`=1
AND `surat_jalan`.`id`='$id'"));

            $barPersen = (sizeof($done)/sizeof($all)*100);
            if (sizeof($all) > 0) {
                return response()->json([
                    "error"=>false,
                    "no_order"=>$id,
                    "bar_persen"=>$barPersen,
                    "total_bayar"=>$all[0]->total2,
                    "uang_muka"=>$all[0]->uang_muka,
                    "sisa_bayar"=>$all[0]->sisa
                ]);
            }else{
                return response()->json([
                    "error"=>true
                ]);
            }


        }catch (\Exception $e){
            return response()->json([
                "error"=>true
            ]);
        }
        }


}