<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function accountOpening(){
        return view('AccountOpeningForm');
    } 
    public function offer(){
        return view('Offers');
    } 
    public function services(){
        return view('OurServices');
    } 
    public function customerCare(){
        return view('CustomerCare');
    }
    public function about(){
        return view ('AboutUs');
    }




    public function createIssue(Request $request)
    {
        $Helpline = new Helpline;
        $Helpline->name = $request->name;
        $Helpline->email = $request->email;
        $Helpline->mobile = $request->mobile;
        $Helpline->issue = $request->issue;
        $Helpline->save();
        return view('CustomerCare');
    }
}

