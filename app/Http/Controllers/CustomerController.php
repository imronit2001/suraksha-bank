<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function TransactionPassword()
    {
        return view('customer.transaction-password');
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
