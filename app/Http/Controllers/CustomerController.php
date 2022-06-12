<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\customer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    function check(Request $request){
      //Validate inputs
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
          return redirect()->route('user.home');
        }else{
          return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }





    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function TransactionPassword()
    {
        return view('customer.transaction-password');
    }

    public function CreditCard(){
        return view('customer.creditCard');
    }

    public function AccountDetails(){
        return view('customer.account-details');
    }
    public function TransactionDetails(){
        return view('customer.transaction-details');
    }
    public function BranchChange(){
        return view('customer.branch-change');
    }
    public function FixedDeposite(){
        return view('customer.fixed-deposite');
    }
    public function FundTransfer(){
        return view('customer.fund-transfer');
    }
    public function ChequeBook(){
        return view('customer.cheque-book');
    }
    public function changePassword()
    {
        return view("Client.changePassword");
    }

    // public function changePassworddone(changePassword $req)
    // {
    //     $password = User::find(session('user_id'))->login;

    //     if (Hash::check($req->current_password, $password['password'])) {
    //         $user = User::find(session("user_id"));
    //         $user->password = bcrypt($req->confirm_password);
    //         $user->save();

    //         $req->session()->flash("change_password", "password changed successfully");
    //         return redirect()->route('logout');
    //     } else {
    //         $req->session()->flash("change_password", "password didn't match with current password");
    //         return redirect('/index/changePassword');
    //     }
    // }
}
