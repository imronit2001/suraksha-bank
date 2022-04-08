<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myNew extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function service()
    {
        return view('data1');
    }
    public function contact()
    {
        return view('data2');
    }

    public function about()
    {
        return view('data3');
    }
}
