<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FundTransfer;
use App\Models\Customer;

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
    { {
        $validate = $request->validate([
            'beneficiary_name'=>'required',
            'benficiary_accountno'=>'required',
            'confirm_accountno'=>'required',
            'ifsc_code'=> 'required|min:4',
            'branch'=>'required',
            'amount'=>'required',
            'upi_pin'=>'required|min:4',
        ]);

        if (Auth::user()->balance < $request->amount  ){
            return back()->with('alert','Insufficient Balance');
        }else {
            if($benficiary_accountno=$confirm_accountno)
            {
                $My_balance=Auth::user()->balance;
                $beneficiary_balance=Customer::where()
            }
        $fund = new FundTransfer();
        $fund ->beneficiary_name=$request->beneficiary_name;
        $fund->benficiary_accountno=$request->benficiary_accountno;
        $fund->ifsc_code=$request->ifsc_code;
        $fund->branch=$request->branch;
        $fund->amount=$request->amount;
        $fund->upi_pin=$request->upi_pin;
        $fund->save();


         return redirect('customer-fund-transfer')->with('message', 'Form Submitted Successfully!');
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
