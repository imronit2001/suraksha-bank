<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountOpeningFormController extends Controller
{
    public function index(){
        return view('AccountOpeningForm');
    } 
}
