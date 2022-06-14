<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;



class indexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function accountOpening(){
        $branch = Branch::all();
        // dd($branch);
        return view('customer.AccountOpeningForm',['branch'=>$branch]);
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
    public function login(){
        return view('customer.login');
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

