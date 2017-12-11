<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function getData(Request $request)
    {
        return view('kasir.data');
    }

    public function getProcess(Request $request)
    {
        return view('kasir.process');
    }
}
