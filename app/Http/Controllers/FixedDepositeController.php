<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FixedDeposit;
use App\Models\customer;
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
        $fd = FixedDeposit::where('account_no', Auth::user()->account_no)->latest()->first();
        $id = 0;
        if ($fd != "") {
            $id = $fd->id;
            $status = $fd->status;
        } else {
            $status = -1;
        }
        return view('customer.fixed-deposite', ['status' => $status, 'id' => $id]);
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
        $fixed->c_name = $request->c_name;
        $fixed->account_no = $request->account_no;
        $fixed->c_id = Auth::user()->customerId;
        $fixed->branch_name = Auth::user()->branch_name;
        $fixed->branch_city = $request->branch_city;
        $fixed->amount = $request->amount;
        $fixed->interest_type = $request->interest_type;
        $fixed->year = $request->year;
        $fixed->email = Auth::user()->Email;
        $fixed->phone = $request->phone;
        $fixed->nominee = $request->nominee;
        $fixed->nominee_relation = $request->nominee_relation;
        $fixed->nominee_aadharNo = $request->nominee_aadharNo;
        $fixed->pan = $request->pan;
        $fixed->terms = $request->terms;
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
        $cheque = FixedDeposit::where('status',0)->get();
        return view('staff.fixed-deposite-list', ['fixed' => $cheque]);
    }
    public function FixedDepositeReset($id)
    {
        $fd = FixedDeposit::find($id);
        $fd->status = -1;
        $fd->save();
        return redirect((route('customer-fixed-deposite')));
    }
    public function approve($id)
    {
        $fd = FixedDeposit::find($id);
        $fd->status = 1;
        $fd->save();
        $customer = customer::where("account_no", $fd->account_no)->first();
        $data = [
            'name' => $customer->FullName,
            'accountNo' => $customer->account_no,
            'prevBranch' => $fd->branchName . " " . $fd->branchCode,
            'curBranch' => $fd->newBranchName . " " . $fd->newBranchCode,
            'status' => 1,
        ];
        // Mail::to($customer->Email)->send(new BranchChangeMail($data));
        $cheque = FixedDeposit::where('status',0);
        return redirect((route('staff-fixed-deposite-list', ['fixed' => $cheque])));
    }
    public function decline($id)
    {
        $fd = FixedDeposit::find($id);
        $fd->status = 2;
        $fd->save();
        $customer = customer::where("account_no", $fd->account_no)->first();
        $data = [
            'name' => $customer->FullName,
            'accountNo' => $customer->account_no,
            'prevBranch' => $fd->branchName . " " . $fd->branchCode,
            'curBranch' => $fd->newBranchName . " " . $fd->newBranchCode,
            'status' => 2,
        ];
        // Mail::to($customer->Email)->send(new BranchChangeMail($data));
        $cheque = FixedDeposit::where('status',0);
        return redirect((route('staff-fixed-deposite-list', ['fixed' => $cheque])));
    }
}
