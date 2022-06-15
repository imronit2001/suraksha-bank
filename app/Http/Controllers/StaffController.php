<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Mail\DebitCreditMail;
use Illuminate\Http\Request;
use App\Models\AccountOpening;
use App\Models\AccountOpenings;
use App\Models\Admin;
use App\Models\Branch;
use App\Models\Staff;
use App\Models\AddManagerForm;
use App\Models\AddStaffForm;
use App\Models\change_branch;
use App\Models\cheque_book;
use App\Models\CreditCard;
use App\Models\customer;
use App\Models\FixedDeposit;
use App\Models\Helpline;
use App\Models\KnowYourCustomer;
use App\Models\Transaction;
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

            $new_account = AccountOpenings::all();
            $new_ac = $new_account->count();
            $customers = customer::where('Status', 'Active');
            $customer = $customers->count();
            $deactivatedcustomers = customer::where('Status', 'Deactivate');
            $deactivatedcustomer = $deactivatedcustomers->count();
            $creditApplications = CreditCard::all();
            $creditApplication = $creditApplications->count();
            $chequeRequests = cheque_book::where('status', '0');
            $chequeRequest = $chequeRequests->count();
            $kycApplications = KnowYourCustomer::all();
            $kycApplication = $kycApplications->count();
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


            $data = ['customer' => $customer, 'deactivatedcustomer' => $deactivatedcustomer, 'creditApplication' => $creditApplication, 'chequeRequest' => $chequeRequest, 'kycApplication' => $kycApplication, 'staff' => $staff, 'manager' => $manager, 'new_ac' => $new_ac, 'changeBranchList' => $changeBranchList, 'branch' => $branch, 'fd' => $fd, 'helpline' => $helpline];


            return redirect()->route('staff-dashboard', $data);
        } else {
            return redirect()->route('staff-login')->with('fail', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('staff')->logout();
        return redirect('/staff/login');
    }



    // public function issue()
    // {
    //     $CustomerIssue = CustomerIssue::all();
    //     return view('customer_issue', ['customerIssue' => $CustomerIssue]);
    // }
    public function dashboard()
    {

        $new_account = AccountOpenings::all();
        $new_ac = $new_account->count();
        $customers = customer::where('Status', 'Active');
        $customer = $customers->count();
        $deactivatedcustomers = customer::where('Status', 'Deactivate');
        $deactivatedcustomer = $deactivatedcustomers->count();
        $creditApplications = CreditCard::all();
        $creditApplication = $creditApplications->count();
        $chequeRequests = cheque_book::where('status', '0');
        $chequeRequest = $chequeRequests->count();
        $kycApplications = KnowYourCustomer::all();
        $kycApplication = $kycApplications->count();
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


        $data = ['customer' => $customer, 'deactivatedcustomer' => $deactivatedcustomer, 'creditApplication' => $creditApplication, 'chequeRequest' => $chequeRequest, 'kycApplication' => $kycApplication, 'staff' => $staff, 'manager' => $manager, 'new_ac' => $new_ac, 'changeBranchList' => $changeBranchList, 'branch' => $branch, 'fd' => $fd, 'helpline' => $helpline];

        return view('staff.dashboard', $data);
    }
    public function creditMoneyIndex(Request $request)
    {
        $customers = DB::table('customers')->get();
        if ($request->ajax()) {
            if ($request->val == 1) {
                $customers = DB::table('customers')->where('account_no', $request->aNo)->get();
                return response()->view('staff.credit-money-ajax', ['customers' => $customers]);
            } elseif ($request->val == 2) {
                $staffPIN = Auth::user()->pin;
                if ($request->pin == $staffPIN) {
                    DB::table('customers')->where('account_no', $request->aNo)->increment('balance', $request->amount);
                    $customer = DB::table('customers')->where('account_no', $request->aNo)->first();
                    $name = $customer->FullName;
                    $cId = $customer->customerId;
                    $aNo = $customer->account_no;
                    $amount = $request->amount;
                    $balance = $customer->balance;
                    $transactionId = "ToCash:" . uniqid() . rand(10000, 99999);
                    $mode = "credit";
                    date_default_timezone_set('Asia/Kolkata');
                    $date = date("jS F Y");
                    $time = date("h:i:s A");

                    $transaction = new Transaction();
                    $transaction->accountNo = $request->aNo;
                    $transaction->date = $date;
                    $transaction->time = $time;
                    $transaction->referenceId = $transactionId;
                    $transaction->credit = $amount;
                    $transaction->debit = "";
                    $transaction->balance = $balance;
                    $transaction->save();

                    $data = ['name' => $name, 'customerId' => $cId, 'accountNo' => $aNo, 'transactionId' => $transactionId, 'amount' => $amount, 'balance' => $balance, 'mode' => $mode, 'date' => $date, 'time' => $time];

                    Mail::to($customer->Email)->send(new DebitCreditMail($data));

                    return response()->view('staff.transaction-reciept', $data);
                } else {
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
                $customers = DB::table('customers')->where('account_no', $request->aNo)->get();
                return response()->view('staff.credit-money-ajax', ['customers' => $customers]);
            }
        }
        return redirect()->route('staff-credit-money');
    }
    public function debitMoneyIndex(Request $request)
    {
        $customers = DB::table('customers')->get();
        if ($request->ajax()) {
            if ($request->val == 1) {
                $customers = DB::table('customers')->where('account_no', $request->aNo)->get();
                return response()->view('staff.debit-money-ajax', ['customers' => $customers]);
            } elseif ($request->val == 2) {
                $staffPIN = Auth::user()->pin;
                if ($request->pin == $staffPIN) {
                    DB::table('customers')->where('account_no', $request->aNo)->decrement('balance', $request->amount);
                    $customer = DB::table('customers')->where('account_no', $request->aNo)->first();
                    $name = $customer->FullName;
                    $cId = $customer->customerId;
                    $aNo = $customer->account_no;
                    $amount = $request->amount;
                    $balance = $customer->balance;
                    $transactionId = "ToCash:" . uniqid() . rand(10000, 99999);
                    $mode = "debit";
                    date_default_timezone_set('Asia/Kolkata');
                    $date = date("jS F Y");
                    $time = date("h:i:s A");

                    $transaction = new Transaction();
                    $transaction->accountNo = $aNo;
                    $transaction->date = $date;
                    $transaction->time = $time;
                    $transaction->referenceId = $transactionId;
                    $transaction->credit = "";
                    $transaction->debit = $amount;
                    $transaction->balance = $balance;
                    $transaction->save();


                    $data = ['name' => $name, 'customerId' => $cId, 'accountNo' => $aNo, 'transactionId' => $transactionId, 'amount' => $amount, 'balance' => $balance, 'mode' => $mode, 'date' => $date, 'time' => $time];

                    Mail::to($customer->Email)->send(new DebitCreditMail($data));


                    return response()->view('staff.transaction-reciept', $data);
                } else {
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
                $customers = DB::table('customers')->where('accountNo', $request->aNo)->get();
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
    public function customers(Request $request)
    {
        if ($request->ajax()) {
            $customer = Customer::where('account_no', $request->aNo)->first();
            $trans = Transaction::where('accountNo', $request->aNo)->get();
            if($customer==""){
                return response("No Account Found");
            }
            return response()->view('staff.customer-details', ['data' => $customer, 'trans' => $trans]);
        } else
            return view('staff.customer');
    }
    public function customerDetails()
    {
        $aNo = '55129611471227';
        $customer = Customer::where('account_no', $aNo)->first();
        $trans = Transaction::where('accountNo', $aNo)->get();

        return view('staff.customer-details', ['data' => $customer, 'trans' => $trans]);
    }
}
