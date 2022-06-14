<?php

namespace App\Http\Controllers;
use App\Models\Branch;

use Illuminate\Http\Request;

class BranchController extends Controller
{

    public function index()
    {
        // show table
        return view('/admin/add-branch');
    }

    public function create(Request $request)
    {
        // show form get method
        $branch = new branch;
        $branch->branch_code = 6;
        $branch->branch_name = $request->branch_name;
        $branch->city = $request->city;
        $branch->state = $request->state;

        $lastbranch = Branch::latest()->first();
        if ($lastbranch == "") {
            $branch->branch_code = "0001";
        } else {
            $branch->branch_code = sprintf("%04d", $lastbranch->branch_code + 1);
        }
        $branch->save();
        return view('/admin/add-branch');
    }

    // public function table(Request $request)
    // {
    //     $branch = branch::all(Request $request);
    //     return view('/admin/branch-table', ['branch'=>$branch]);
    // }


    public function store(Request $request)
    {
        // submit form post method
        $branch = branch::all();
        return view('admin.branch-table', ['branch'=>$branch]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete branch
        branch::destroy($id);
        return redirect(route('admin-branch-table'));
    }
}
