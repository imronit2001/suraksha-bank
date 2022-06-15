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
        $cId = Auth::user()->customerId;;
        $id = 0;
        $cheque = cheque_book::where('customerId',  $cId)->latest()->first();
        // $customer = customer::where('customerId', $ $cId)->latest()->first();
        if ($cheque != "") {
            $id = $cheque->id;
            $status = $cheque->status;
        } else
            $cheque = -1;
        return view('customer.cheque-book', ['status' => $status, 'id' => $id]);
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
        $cheque_book->customerId = Auth::user()->customerId;
        $cheque_book->accountNo = Auth::user()->account_no;
        $cheque_book->accountType = 'Saving';
        $cheque_book->branchName = Auth::user()->BranchName;;
        $cheque_book->no_of_chequeBoook = $request->no_of_chequeBoook;
        $cheque_book->no_of_chequeLeaves = $request->no_of_chequeLeaves;
        $cheque_book->address = $request->address;
        $cheque_book->save();
        return redirect((route('customer-cheque-book')))->with('success', 'Your Application submittedSuccessfully ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cheque = cheque_book::where('status', 0)->get();
        return view('staff.ChequeBookRequest', ['cheque' => $cheque]);
    }

    public function reset($id)
    {
        $fd = cheque_book::find($id);
        $fd->status = -1;
        $fd->save();
        return redirect((route('customer-cheque-book')));
    }

    public function approve($id)
    {
        $fd = cheque_book::find($id);
        $fd->status = 1;
        $fd->save();
        $customer = customer::where("account_no", $fd->account_no)->first();

        // Mail::to($customer->Email)->send(new BranchChangeMail($data));
        $cheque = cheque_book::where('status', 0);
        return redirect((route('staff-cheque-book-request', ['fixed' => $cheque])));
    }
    public function decline($id)
    {
        $fd = cheque_book::find($id);
        $fd->status = 2;
        $fd->save();
        $customer = customer::where("account_no", $fd->account_no)->first();

        // Mail::to($customer->Email)->send(new BranchChangeMail($data));
        $cheque = cheque_book::where('status', 0);
        return redirect((route('staff-cheque-book-request', ['fixed' => $cheque])));
    }
}
