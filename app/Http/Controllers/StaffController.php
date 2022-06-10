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
        return view('customer_issue', ['customerIssue' => $CustomerIssue]);
    }
    public function dashboard()
    {
        return view('staff.dashboard');
    }
    public function creditMoneyIndex(Request $request)
    {
        $customers = DB::table('customer_data')->get();
        if ($request->ajax()) {
            if ($request->val == 1) {
                $customers = DB::table('customer_data')->where('accountNo', $request->aNo)->get();
                return response()->view('staff.credit-money-ajax', ['customers' => $customers]);
            } elseif ($request->val == 2) {
                $staffPIN = "1111";
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

                    return response()->view('staff.transaction-reciept', $data);
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
            } elseif ($request->val == 2) {
                $staffPIN = "1111";
                if ($request->pin == $staffPIN) {
                    return response()->view('staff.dashboard');
                }
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
                $staffPIN = "1111";
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

                    return response()->view('staff.transaction-reciept', $data);
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
                $staffPIN = "1111";
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
