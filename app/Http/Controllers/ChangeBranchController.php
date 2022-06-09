<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\change_branch;
use Illuminate\Http\Request;

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
        $aNo = "2221131878502311";
        $cId = "2517383537107734";
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
