<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Mail\DebitCreditMail;
use Illuminate\Http\Request;


use App\Models\AccountOpening;
use App\Models\Admin;
use App\Models\Branch;
use App\Models\Staff;
use App\Models\AddManagerForm;
use App\Models\AddStaffForm;
use App\Models\change_branch;
use App\Models\CustomerData;
use App\Models\FixedDeposit;
use App\Models\Helpline;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StaffController extends Controller
{

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:staff,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in authors table'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('staff')->attempt($creds)) {

            // $new_account = AccountOpening::all();
            // $new_ac = $new_account->count();
            $customers = CustomerData::all();
            $customer = $customers->count();
            $staffs = Staff::all();
            $staff = $staffs->count();
            $managers = Admin::all();
            $manager = $managers->count();
            $branches = Admin::all();
            $branch = $branches->count();
            $helplines = Helpline::all();
            $helpline = $helplines->count();
            $fds = FixedDeposit::all();
            $fd = $fds->count();
            $changeBranch = change_branch::where("status", 0)->get();
            $changeBranchList = $changeBranch->count();


            $data = ['customer' => $customer, 'staff' => $staff, 'manager' => $manager, 'changeBranchList' => $changeBranchList, 'branch' => $branch, 'fd' => $fd, 'helpline' => $helpline];


            return redirect()->route('staff-dashboard', $data);
        } else {
            return redirect()->route('staff-login')->with('fail', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('author')->logout();
        return redirect('/');
    }



    // public function issue()
    // {
    //     $CustomerIssue = CustomerIssue::all();
    //     return view('customer_issue', ['customerIssue' => $CustomerIssue]);
    // }
    public function dashboard()
    {

        // $new_account = AccountOpening::all();
        // $new_ac = $new_account->count();
        $customers = CustomerData::all();
        $customer = $customers->count();
        $staffs = Staff::all();
        $staff = $staffs->count();
        $managers = Admin::all();
        $manager = $managers->count();
        $branches = Admin::all();
        $branch = $branches->count();
        $helplines = Helpline::all();
        $helpline = $helplines->count();
        $fds = FixedDeposit::all();
        $fd = $fds->count();
        $changeBranch = change_branch::where("status", 0)->get();
        $changeBranchList = $changeBranch->count();


        $data = ['customer' => $customer, 'staff' => $staff, 'manager' => $manager, 'changeBranchList' => $changeBranchList, 'branch' => $branch, 'fd' => $fd, 'helpline' => $helpline];

        return view('staff.dashboard', $data);
    }
    public function creditMoneyIndex(Request $request)
    {
        $customers = DB::table('customer_data')->get();
        if ($request->ajax()) {
            if ($request->val == 1) {
                $customers = DB::table('customer_data')->where('accountNo', $request->aNo)->get();
                return response()->view('staff.credit-money-ajax', ['customers' => $customers]);
            } elseif ($request->val == 2) {
                $staffPIN = Auth::user()->pin;
                if ($request->pin == $staffPIN) {
                    DB::table('customer_data')->where('accountNo', $request->aNo)->increment('balance', $request->amount);
                    $customer = CustomerData::where('accountNo', $request->aNo)->first();
                    $name = $customer->customerName;
                    $cId = $customer->customerId;
                    $aNo = $customer->accountNo;
                    $amount = $request->amount;
                    $balance = $customer->balance;
                    $transactionId = "ToCash:" . uniqid() . rand(10000, 99999);
                    $mode = "credit";
                    date_default_timezone_set('Asia/Kolkata');
                    $date = date("jS F Y");
                    $time = date("h:i:s A");
                    // $id = $customer->userid; //user id
                    // $id_lenth = strlen($id);
                    // $stamp = mt_rand(2, 100);
                    // $random_id_length = 14 - $id_lenth;
                    // $paymentreferenceno = hexdec(uniqid(rand(), 1));
                    // $paymentreferenceno = strip_tags(stripslashes($paymentreferenceno));
                    // $paymentreferenceno = str_replace(".", "", $paymentreferenceno);
                    // $paymentreferenceno = str_replace("E", "$stamp", $paymentreferenceno);
                    // $paymentreferenceno = str_replace("+", "9", $paymentreferenceno);
                    // $paymentreferenceno = strrev(str_replace("/", "", $paymentreferenceno));
                    // $transactionId = substr($paymentreferenceno, 0, $random_id_length);
                    // $paymentreference_no = $paymentreferenceno.$id; //payment reference no

                    $data = ['name' => $name, 'customerId' => $cId, 'accountNo' => $aNo, 'transactionId' => $transactionId, 'amount' => $amount, 'balance' => $balance, 'mode' => $mode, 'date' => $date, 'time' => $time];

                    Mail::to($customer->email)->send(new DebitCreditMail($data));

                    return response()->view('staff.transaction-reciept', $data);
                }else{
                    return response()->view('staff.wrongpin');
                }
            }
        }
        return view('staff.credit-money', ['customers' => $customers]);
    }
    public function creditMoneyCreate(Request $request)
    {
        if ($request->ajax()) {
            if ($request->val == 1) {
                $customers = DB::table('customer_data')->where('accountNo', $request->aNo)->get();
                return response()->view('staff.credit-money-ajax', ['customers' => $customers]);
            }
        }
        return redirect()->route('staff-credit-money');
    }
    public function debitMoneyIndex(Request $request)
    {
        $customers = DB::table('customer_data')->get();
        if ($request->ajax()) {
            if ($request->val == 1) {
                $customers = DB::table('customer_data')->where('accountNo', $request->aNo)->get();
                return response()->view('staff.debit-money-ajax', ['customers' => $customers]);
            } elseif ($request->val == 2) {
                $staffPIN = Auth::user()->pin;
                if ($request->pin == $staffPIN) {
                    DB::table('customer_data')->where('accountNo', $request->aNo)->decrement('balance', $request->amount);
                    $customer = CustomerData::where('accountNo', $request->aNo)->first();
                    $name = $customer->customerName;
                    $cId = $customer->customerId;
                    $aNo = $customer->accountNo;
                    $amount = $request->amount;
                    $balance = $customer->balance;
                    $transactionId = "ToCash:" . uniqid() . rand(10000, 99999);
                    $mode = "debit";
                    date_default_timezone_set('Asia/Kolkata');
                    $date = date("jS F Y");
                    $time = date("h:i:s A");

                    $data = ['name' => $name, 'customerId' => $cId, 'accountNo' => $aNo, 'transactionId' => $transactionId, 'amount' => $amount, 'balance' => $balance, 'mode' => $mode, 'date' => $date, 'time' => $time];

                    Mail::to($customer->email)->send(new DebitCreditMail($data));


                    return response()->view('staff.transaction-reciept', $data);
                }else{
                    return response()->view('staff.wrong pin');
                }
            }
        }
        return view('staff.debit-money', ['customers' => $customers]);
    }
    public function debitMoneyCreate(Request $request)
    {
        if ($request->ajax()) {
            if ($request->val == 1) {
                $customers = DB::table('customer_data')->where('accountNo', $request->aNo)->get();
                return response()->view('staff.debit-money-ajax', ['customers' => $customers]);
            } elseif ($request->val == 2) {
                $staffPIN = Auth::user()->pin;
                if ($request->pin == $staffPIN) {
                    return response()->view('staff.dashboard');
                }
            }
        }
        return redirect()->route('staff-debit-money');
    }
    public function transaction()
    {
        return view('staff.transaction-reciept');
    }

    public function ShowChequeBookList()
    {
        // $data=modal::all();
        return view('staff.ChequeBookRequest');
    }
}
