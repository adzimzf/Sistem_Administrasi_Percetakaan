<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function insert(Request $request)
    {
        return view('designer.insert');
    }
}
