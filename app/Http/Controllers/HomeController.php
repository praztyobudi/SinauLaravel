<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('vhome');
    }
    public function formulir()
    {
        return view('layoutside/vformulir');
    }
    public function setting()
    {
        return view('layoutside/vsetting');
    }
}
