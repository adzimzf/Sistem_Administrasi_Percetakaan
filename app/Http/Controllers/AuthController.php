<?php
/**
 * Created by PhpStorm.
 * User: nakama
 * Date: 11/02/18
 * Time: 23:33
 */

namespace App\Http\Controllers;

use Auth;

class AuthController extends Controller
{
    public function redir()
    {
        if (auth()->check()) {
            redirect('/login');
        }
        $role = Auth::user()->role_id;

        switch ($role) {
            case 1 : return redirect("/designer/insert"); break;
            case 2 : return redirect("/kasir/data"); break;
            case 3 : return redirect("/operator/data"); break;
            case 1 : return view('home'); break;
        }
    }
}