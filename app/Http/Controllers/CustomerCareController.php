<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helpline;

class CustomerCareController extends Controller
{
    public function index(){
        return view('CustomerCare');
    }

    public function create(Request $request)
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
