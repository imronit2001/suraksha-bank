<?php

namespace App\Http\Controllers;
use App\Models\CustomerData;
use App\Models\cheque_book;
use Illuminate\Http\Request;

class ChequeBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *+
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cheque_book = CustomerData::all();
        // $cId = "2517383537107734";
        $accountNo="12345678901234";
        $status_id = 0 ;
        $status = cheque_book::where('accountNo', $accountNo)->latest()->first();
        $customer = CustomerData::where('accountNo', $accountNo)->latest()->first();
        if($status != ""){
            $status_id = $status->id;
            $status = $status->status;
        }else
        $status = -1 ;
        echo $status;
        // $users = DB::table('users')->select('id','name','email')->get();


        return view('customer.cheque-book',['customer'=>$customer, 'status'=>$status, 'status_id'=>$status_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cheque_book = new cheque_book();
        $customerId = Auth::user()->customerId;
        $cheque_book -> customerId=$request->customerId;
        $cheque_book->accountNo=$request->accountNo;
        $cheque_book->accountType=$request->accountType;
        $cheque_book->branchName=$request->branchName;
        $cheque_book->no_of_chequeBoook=$request->no_of_chequeBoook;
        $cheque_book->no_of_checkleaves=$request->no_of_checkleaves;
        $cheque_book->address=$request->address;
        $cheque_book->save();
        return redirect((route('customer-cheque-book')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cheque = cheque_book::all();
        return view('staff.ChequeBookRequest',['cheque'=>$cheque]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cheque_book  $cheque_book
     * @return \Illuminate\Http\Response
     */
    public function show(cheque_book $cheque_book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cheque_book  $cheque_book
     * @return \Illuminate\Http\Response
     */
    public function edit(cheque_book $cheque_book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cheque_book  $cheque_book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cheque_book $cheque_book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cheque_book  $cheque_book
     * @return \Illuminate\Http\Response
     */
    public function destroy(cheque_book $cheque_book)
    {
        //
    }
}
