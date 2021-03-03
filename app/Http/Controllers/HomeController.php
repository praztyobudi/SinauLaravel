<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function formulir()
    {
        return view('vcontent.vbiodata.vformulir');
    }
    public function setting()
    {
        return view('vcontent.vbiodata.vsetting');
    }
}
