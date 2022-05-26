<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KYCFormController extends Controller
{
    public function index(){
        return view('forms/KYC-Form');
    } 
}
