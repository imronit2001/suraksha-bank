<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helpline;

class AdminHelplinecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function issue(Request $request)
    {
        // $Helpline = Helpline::all(Request $request);
        $search = $request['search'] ?? "";
        if ($search != ""){
            $Helpline = Helpline::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else {
            $Helpline = Helpline::all();
        }
        return view('customer.customer-issue', ['Helpline'=>$Helpline]);
    }

    public function issues($id)
    {
        // $Helpline = Helpline::all(Request $request);
        // $Helpline = Helpline::all();
        // return view('customer.customer-issues', ['Helpline'=>$Helpline]);
        $Helpline = Helpline::find($id);
        return view('customer.customer-issues',['Helpline'=>$Helpline]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
