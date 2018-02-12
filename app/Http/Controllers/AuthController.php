<?php
/**
 * Created by PhpStorm.
 * User: nakama
 * Date: 11/02/18
 * Time: 23:33
 */

namespace App\Http\Controllers;

use App\Models\RoleAccess;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Exception;
use Session;

class AuthController extends Controller
{
    public function redir()
    {
        if (Auth::user() == null){
            return redirect("/login");
        }
        $role = Auth::user()->role_id;

        switch ($role) {
            case 1 : return redirect("/designer/insert"); break;
            case 2 : return redirect("/kasir/data"); break;
            case 3 : return redirect("/operator/data"); break;
            case 1 : return view('home'); break;
        }
    }

    public function profile($id)
    {
        $user = User::where(["id"=>$id])->first();
        $positions = RoleAccess::get();
        return view('auth.profile', ["user"=>$user, 'positions'=>$positions]);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'id'             => "required",
            'name'           => "required",
            'password'         => "required",
            're-password'   => "required",
            'photo'             => 'required'
        ]);
        $id         = $request->input("id");
        $name       = $request->input("name");
        $email      = $request->input("email");
        $password   = $request->input("password");
        $repassword = $request->input("re-password");
        $photo      = $request->file("photo");
        $position   = $request->input("position");

        if (Auth::user()->role_id != "4"){
            if ($password != $repassword){
                Session::flash('message_profile_update_error','Password Tidak Sama');
                return redirect("/profile/".$id);
            }
        }

        try {
            $user = User::where(["id" => $id]);
            $fileName = $this->saveImage($photo);
            if ($position){
                $user->update([
                    "name" => $name,
                    "email" => $email,
                    "password" => bcrypt($password),
                    "image" => $fileName,
                    "role_id" => $position
                ]);
            }else{
                $user->update([
                    "name" => $name,
                    "email" => $email,
                    "password" => bcrypt($password),
                    "image" => $fileName
                ]);
            }

            Session::flash('message_profile_update_success','Berhasil mengubah data');
            return redirect("/profile/".$id);
        }catch (Exception $e){
            Session::flash('message_profile_update_error','Error mengubah data');
            return redirect("/profile/".$id);
        }

    }
    private function saveImage($file) {
        if($file) {
            $extension = $file->getClientOriginalExtension();
            $namaFile = sha1(date("Y-m-d H:i:s")).".".$extension;
            $file->move('images/profile', $namaFile);
            return $namaFile;
        }
        return "";

    }
}