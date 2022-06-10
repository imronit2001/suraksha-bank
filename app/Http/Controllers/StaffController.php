<?php

namespace App\Http\Controllers;

use App\Models\CustomerData;
use Illuminate\Http\Request;
use App\Models\CustomerIssue;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function issue()
    {
        $CustomerIssue = CustomerIssue::all();
        return view('customer_issue', ['customerIssue'=>$CustomerIssue]);
    }
    public function dashboard()
    {
        return view('staff.dashboard');
    }
    public function creditMoneyIndex(Request $request)
    {
        $customers = DB::table('customer_data')->get();
        if($request->ajax()){
            $customers = DB::table('customer_data')->where('accountNo', $request->aNo)->get();
            return response()->view('staff.credit-money-ajax',['customers'=>$customers]);
        }
        return view('staff.credit-money',['customers'=>$customers]);
    }
    public function creditMoneyCreate(Request $request)
    {
        return redirect()->route('staff-credit-money');
    }
    public function debitMoneyIndex(Request $request)
    {
        $customers = DB::table('customer_data')->get();
        if($request->ajax()){
            if($request->val==1){
                $customers = DB::table('customer_data')->where('accountNo', $request->aNo)->get();
                return response()->view('staff.debit-money-ajax',['customers'=>$customers]);
            }elseif($request->val==2){
                $staffPIN = "1111";
                if($request->pin==$staffPIN){
                    DB::table('users')->increment('balance', $request->amount);
                    return response("Money Credited");
                }
            }
        }
        return view('staff.debit-money',['customers'=>$customers]);
    }
    public function debitMoneyCreate(Request $request)
    {
        return redirect()->route('staff-debit-money');
    }
    public function ShowChequeBookList(){
        $data=modal::all();
        return view('staff.ChequeBookRequest');
    }
}
