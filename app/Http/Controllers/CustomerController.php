<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\AccountOpenings;
use App\Models\CreditCard;

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

    public function CreateCreditCard(Request $request){
        $CreditCard = new CreditCard;
        $CreditCard->prefix=$request->prefix;
        $CreditCard->FullName=$request->FullName;
        $CreditCard->FatherName=$request->FatherName;
        $CreditCard->gender=$request->gender;
        $CreditCard->DOB=$request->dob;
        $CreditCard->MaritalStatus=$request->MaritalStatus;
        $CreditCard->Nationality=$request->Nationality;
        $CreditCard->ResidentialStatus=$request->ResidentialStatus;
        $CreditCard->PanNumber=$request->PanNumber;
        $CreditCard->AadharNumber=$request->AadharNumber;
        $CreditCard->save();
        return redirect('/customer')->with('Success, Data Added'); 
    }

    function CreditRequest(){
        $data = CreditCard::all();
        // echo "Code Here";
        return view('staff/creditRequest',['data'=>$data]);
    }

    public function ShiftData($id){
        $user = AccountOpenings::find($id);
        $customer = new customer();
        $customer->prefix = $user->prefix;
        $customer->FullName = $user->FullName;
        $customer->DOB = $user->DOB;
        $customer->gender = $user->gender;
        $customer->MaritalStatus = $user->MaritalStatus;
        $customer->FatherName = $user->FatherName;
        $customer->MotherName = $user->MotherName;
        $customer->GaurdianName = $user->GaurdianName;
        $customer->Nationality = $user->Nationality;
        $customer->ResidentialStatus = $user->ResidentialStatus;
        $customer->OccupationType = $user->OccupationType;
        $customer->religion = $user->religion;
        $customer->category = $user->category;
        $customer->CustomerType = $user->CustomerType;
        $customer->Disability = $user->Disability;
        $customer->Qualification = $user->Qualification;
        $customer->PanNumber = $user->PanNumber;
        $customer->Mobile = $user->Mobile;
        $customer->Email = $user->Email;
        $customer->Telephone = $user->Telephone;
        $customer->AddressProof = $user->AddressProof;
        $customer->AddressProofNumber = $user->AddressProofNumber;
        $customer->issuedBy = $user->issuedBy;
        $customer->AddressType = $user->AddressType;
        $customer->Address = $user->Address;
        $customer->City = $user->City;
        $customer->District = $user->District;
        $customer->State = $user->State;
        $customer->Pin = $user->Pin;
        $customer->Country = $user->Country;
        $customer->Place = $user->Place;
        $customer->signDate = $user->signDate;
        $customer->ApplicantPhoto = $user->ApplicantPhoto;
        $customer->ApplicantSignature = $user->ApplicantSignature;
        $customer->ApplicantAadhar = $user->ApplicantAadhar;

        $customer->save();
        
        return view('/staff/');
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
