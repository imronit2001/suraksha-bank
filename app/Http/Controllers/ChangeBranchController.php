<?php

namespace App\Http\Controllers;

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
        return view('customer.branch-change');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $branch = new change_branch();
        $branch->AccountType  = $request->AccountType;
        $branch->AccountNumber = $request->AccountNumber;
        $branch->BranchCode = $request->BranchCode;
        $branch->CurrentBranch = $request->CurrentBranch;
        $branch->NewBranch = $request->NewBranch;
        $branch->City =$request->City;
        $branch->State = $request->State;
        $branch->save();

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
