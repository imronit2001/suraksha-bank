<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FundTransfer;
use App\Models\customer;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class FundTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.fund-transfer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validate = $request->validate([
            'beneficiary_name' => 'required',
            'benficiary_accountno' => 'required',
            'confirm_accountno' => 'required',
            'ifsc_code' => 'required|min:4',
            'branch' => 'required',
            'amount' => 'required',
            'upi_pin' => 'required|min:4',
        ]);
        $My_balance = Auth::user()->balance;

        $beneficiary=customer::where('account_no',$request->benficiary_accountno)->first();
        $beneficiary_balance=$beneficiary->balance;
        if (Auth::user()->balance < $request->amount) {
            return back()->with('alert', 'Insufficient Balance');
        } else {
            if ($request->benficiary_accountno = $request->confirm_accountno) {
                $update_myBal =  $My_balance - $request->amount;
                $update_beneficiaryBal = $beneficiary_balance + $request->amount;
                // Selection::whereId($id)->update($request->all());
               customer::where('account_no', $beneficiary->account_no)->update(['balance' =>$update_beneficiaryBal ]);
               customer::where('account_no', Auth::user()->account_no)->update(['balance' =>$update_myBal ]);
               $fund = new FundTransfer();
               $fund->customerId=Auth::user()->customerId;
               $fund->beneficiary_name = $request->beneficiary_name;
               $fund->benficiary_accountno = $request->benficiary_accountno;
               $fund->referenceId= "UPI:" . uniqid() . rand(10000, 99999);
               $fund->ifsc_code = $request->ifsc_code;
               $fund->branch = $request->branch;
               $fund->amount = $request->amount;
               $fund->upi_pin = $request->upi_pin;

               $fund->save();
               date_default_timezone_set('Asia/Kolkata');
               $date = date("jS F Y");
               $time = date("h:i:s A");

               $transaction1 = new Transaction();
               $transaction1->accountNo = Auth::user()->account_no;
               $transaction1->date = $date;
               $transaction1->time = $time;
               $transaction1->referenceId = $fund->referenceId;
               $transaction1->credit = "";
               $transaction1->debit = $request->amount;
               $transaction1->balance = $update_myBal;
               $transaction1->save();

               $transaction2->accountNo = $request->benficiary_accountno;
               $transaction2->date = $date;
               $transaction2->time = $time;
               $transaction2->referenceId = $fund->referenceId;
               $transaction2->credit = $request->amount;
               $transaction2->debit = "";
               $transaction2->balance = $update_beneficiaryBal;
               $transaction2->save();
            }else{
                return back()->with('alert', 'Account Number is not matched!');
            }


            return redirect((route('customer-fund-transfer')))->with('success', 'Your Application submittedSuccessfully ');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
