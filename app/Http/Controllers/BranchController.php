<?php

namespace App\Http\Controllers;
use App\Http\Models\Branch;

use Illuminate\Http\Request;

class BranchController extends Controller
{

    public function index()
    {
        // show table
    }

    public function create()
    {
        // show form get method
    }

    public function store(Request $request)
    {
        // submit form post method
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
    }
}
