<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\AccountCreationMail;
use Illuminate\Http\Request;
use App\Models\change_branch;
use App\Models\customer;
use App\Models\CustomerData;
use App\Models\FundTransfer;
use App\Models\AccountOpenings;
use App\Models\CreditCard;
use App\Models\Transaction;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    function check(Request $request)
    {
        //Validate inputs
        $request->validate([
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists on users table'
        ]);

        $creds = $request->only('email', 'password');
        if(Auth::guard('customer')->attempt($creds)) {
            return redirect()->route('customer-dashboard');
        } else {
            return redirect()->route('customer-login')->with('fail', 'Incorrect credentials');
        }
    }

    function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/customer/login');
    }





    public function dashboard()
    {
        $cId = Auth::user()->customerId;
        $account_no = Auth::user()->account_no;
        $customer = Customer::where('customerId', $cId)->latest()->first();
        $fund = FundTransfer::where('customerId', $cId)->get();
        $trans = Transaction::where('accountNo', $account_no)->get();

        // dd($fund);
        // dd($trans);
        return view('customer.dashboard', ['customer' => $customer, 'fund' => $fund, 'trans' => $trans]);
    }

    public function TransactionPassword(Request $request)
    {
        $password= new customer();
        $password->new_password=$request->new_password;
        $password->confirm_password=$request->confirm_password;
        dd($password);

        // return view('customer.transaction-password');
    }

    public function CreditCard()
    {
        return view('customer.creditCard');
    }

    public function AccountDetails()
    {
        // return view('customer.account-details');
        $cId = Auth::user()->customerId;
        $customer = Customer::where('customerId', $cId)->latest()->first();
        return view('customer.account-details', ['customer' => $customer]);
        // print_r($customer);
        // echo $customer->customerName;
        // dd($customer);
    }
    public function TransactionDetails()
    {   $account_no = Auth::user()->account_no;
        $trans = Transaction::where('accountNo', $account_no)->get();
        return view('customer.transaction-details',['trans'=>$trans]);
    }
    public function BranchChange()
    {
        return view('customer.branch-change');
    }
    public function FixedDeposite()
    {
        return view('customer.fixed-deposite');
    }
    public function FundTransfer()
    {
        return view('customer.fund-transfer');
    }
    public function ChequeBook()
    {
        return view('customer.cheque-book');
    }
    public function changePassword()
    {
        return view("Client.changePassword");
    }

    public function CreateCreditCard(Request $request)
    {
        $CreditCard = new CreditCard;
        $CreditCard->prefix = $request->prefix;
        $CreditCard->FullName = $request->FullName;
        $CreditCard->FatherName = $request->FatherName;
        $CreditCard->gender = $request->gender;
        $CreditCard->DOB = $request->DOB;
        $CreditCard->MaritalStatus = $request->MaritalStatus;
        $CreditCard->Nationality = $request->Nationality;
        $CreditCard->ResidentialStatus = $request->ResidentialStatus;
        $CreditCard->PanNumber = $request->PanNumber;
        $CreditCard->AadharNumber = $request->AadharNumber;
        $CreditCard->save();
        return redirect('/customer')->with('Success, Data Added');
    }

    function CreditRequest()
    {
        $data = CreditCard::all();
        // echo "Code Here";
        return view('staff/creditRequest', ['data' => $data]);
    }
    function CreditRequests($id){
        $data = CreditCard::find($id);
        return view('/staff/CreditRequests',['data' => $data]);
    }

    public function ShiftData($id)
    {
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
        $customer->BranchName = $user->BranchName;
        $customer->BranchCode = $user->BranchCode;
        $customer->Place = $user->Place;
        $customer->signDate = $user->signDate;
        $customer->ApplicantPhoto = $user->ApplicantPhoto;
        $customer->ApplicantSignature = $user->ApplicantSignature;
        $customer->ApplicantAadhar = $user->ApplicantAadhar;



        $lastCustomer = customer::latest()->first();

        if ($lastCustomer == "") {
            $customer->customerId = random_int(1111111111, 9999999999);
            $customer->account_no = random_int(11111111111111, 99999999999999);
        } else {
            $customer->customerId = $lastCustomer->customerId+1;
            $customer->account_no = $lastCustomer->account_no+1;
        }
        $password = Str::random(10);
        $customer->password = Hash::make($password);
        $customer->transaction_pass = Str::random(14);
        $customer->save();
        $data = [
            'FullName' => $customer->FullName,
            'FatherName'=> $customer->FatherName,
            'Mobile'=> $customer->Mobile,
            'Email' => $customer->Email,
            'dob' => $customer->DOB,
            'customerId' => $customer->customerId,
            'accountNo' => $customer->account_no,
            'BranchName' => $customer->BranchName,
            'login_pass' => $password,
            'transaction_pass' => $customer->transaction_pass,

        ];

        Mail::to($customer->Email)->send(new AccountCreationMail($data));


        // return view('/staff/');
        return redirect()->route('staff-AccountOpeningList');
    }

    // public function changePassworddone(changePassword $req)
    // {
        // $password = User::find(session('user_id'))->login;

        // if (Hash::check($req->current_password, $password['password'])) {
        //     $user = User::find(session("user_id"));
        //     $user->password = bcrypt($req->confirm_password);
        //     $user->save();

        //     $req->session()->flash("change_password", "password changed successfully");
        //     return redirect()->route('logout');
        // } else {
        //     $req->session()->flash("change_password", "password didn't match with current password");
        //     return redirect('/index/changePassword');
        // }
    // }
}
