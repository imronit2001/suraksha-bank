<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FixedDeposit;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class FixedDepositeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function FixedDeposite()
    {
        return view('customer.fixed-deposite');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fixed = new FixedDeposit();
        // $customerId = Auth::user()->customerId;
        // $fixed -> customerId=Auth::user()->customerId;
        $fixed ->c_name=$request->c_name;
        $fixed ->account_no=$request->account_no;
        $fixed ->c_id= Auth::user()->customerId;
        $fixed ->branch_name=Auth::user()->branch_name;
        $fixed ->branch_city=$request->branch_city;
        $fixed ->amount=$request->amount;
        $fixed ->interest_type=$request->interest_type;
        $fixed ->year=$request->year;
        $fixed ->email=Auth::user()->Email;
        $fixed ->phone=$request->phone;
        $fixed ->nominee=$request->nominee;
        $fixed ->nominee_relation=$request->nominee_relation;
        $fixed->nominee_aadharNo=$request->nominee_aadharNo;
        $fixed->pan=$request->pan;
        $fixed->terms=$request->terms;
        $fixed->save();
        return redirect('/customer')->with('Success, Form Submitted Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cheque = FixedDeposit::all();
        return view('staff.fixed-deposite-list',['fixed'=>$cheque]);
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
