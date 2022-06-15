<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\cheque_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ChequeBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *+
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cId = Auth::user()->customerId;
        // $customer = Customer::where('customerId', $cId)->latest()->first();
        // $cheque_book = CustomerData::all();
        $status_id = 0 ;
        $status = cheque_book::where('customerId',  $cId)->latest()->first();
        // $customer = customer::where('customerId', $ $cId)->latest()->first();
        if($status != ""){
            $status_id = $status->id;
            $status = $status->status;
        }else
        $status = -1 ;

        // $users = DB::table('users')->select('id','name','email')->get();


        return view('customer.cheque-book',['status'=>$status, 'status_id'=>$status_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cheque_book = new cheque_book();
        // $customerId = Auth::user()->customerId;
        $cheque_book -> customerId=Auth::user()->customerId;
        $cheque_book->accountNo=Auth::user()->account_no;
        $cheque_book->accountType='Saving';
        $cheque_book->branchName=Auth::user()->BranchName;;
        $cheque_book->no_of_chequeBoook=$request->no_of_chequeBoook;
        $cheque_book->no_of_chequeLeaves=$request->no_of_chequeLeaves;
        $cheque_book->address=$request->address;
        $cheque_book->save();
        return redirect((route('customer-cheque-book')))->with('success','Your Application submittedSuccessfully ');
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
