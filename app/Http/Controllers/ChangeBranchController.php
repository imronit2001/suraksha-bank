<?php

namespace App\Http\Controllers;

use App\Mail\BranchChangeMail;
use App\Models\CustomerData;
use App\Models\Branch;
use App\Models\change_branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ChangeBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = Branch::all();
        $cId = "2517383537107734";
        $status_id = 0 ;
        $status = change_branch::where('cId', $cId)->latest()->first();
        if($status != ""){
            $status_id = $status->id;
            $status = $status->status;
        }else
        $status = -1 ;
        // echo $status;
        return view('customer.branch-change',['branch'=>$branch, 'status'=>$status, 'status_id'=>$status_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $branch = new change_branch();
        $aNo = "123456789012";
        $cId = "1234567890";
        $aType = "Saving Account";
        $branchName = "Chuchura";
        $branchCode = "SKB1";
        $branch->aType  = $aType;
        $branch->aNo = $aNo;
        $branch->cId = $cId;
        $branch->branchName = $branchName;
        $branch->branchCode = $branchCode;
        $branch->newBranchName = $request->newBranchName;
        $branch->newBranchCode = $request->newBranchCode;
        $branch->reason = $request->reason;
        $branch->save();

        $application = change_branch::where('aNo',$aNo)->latest()->get();
        $customer = CustomerData::where("accountNo", $aNo)->latest()->get();
        $data = [
            'name' => $customer->customerName,
            'accountNo' => $customer->accountNo,
            'prevBranch' => $application->branchName . " " . $application->branchCode,
            'curBranch' => $application->newBranchName . " " . $application->newBranchCode,
            'status' => 0,
        ];
        Mail::to($customer->email)->send(new BranchChangeMail($data));

        return redirect((route('customer-branch-change')));
    }

    public function reset($id)
    {
        $change_branch = change_branch::find($id);
        $change_branch->status = -1 ;
        $change_branch->save();
        // echo $change_branch;
        return redirect((route('customer-branch-change')));
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
     * @param  \App\Models\change_branch  $change_branch
     * @return \Illuminate\Http\Response
     */
    public function show(change_branch $change_branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\change_branch  $change_branch
     * @return \Illuminate\Http\Response
     */
    public function edit(change_branch $change_branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\change_branch  $change_branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, change_branch $change_branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\change_branch  $change_branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(change_branch $change_branch)
    {
        //
    }
}
