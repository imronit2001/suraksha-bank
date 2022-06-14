<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helpline;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelplineMail;

class AdminHelplinecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function issue(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != ""){
            $Helpline = Helpline::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else {
            $Helpline = Helpline::all();
        }
        return view('admin.customer-helpline', ['Helpline'=>$Helpline]);
    }

    public function issues($id)
    {
        $Helpline = Helpline::find($id);
        return view('admin.customer-issue',['Helpline'=>$Helpline]);
    }

    public function helplineReply(Request $request)
    {
        $name = $request->name;
        $reply = $request->reply ;
        $email = $request->email ;
        $id = $request->id ;

        $data = ['name'=>$name, 'reply'=>$reply];

        Mail::to($email)->send(new HelplineMail($data));
        // dd($request->all());
        Helpline::destroy($id);
        return redirect((route('admin-helpline')));

    }

    public function issueStaff(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != ""){
            $Helpline = Helpline::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else {
            $Helpline = Helpline::all();
        }
        return view('staff.customer-helpline', ['Helpline'=>$Helpline]);
    }

    public function issuesStaff($id)
    {
        $Helpline = Helpline::find($id);
        return view('staff.customer-issue',['Helpline'=>$Helpline]);
    }

    public function helplineReplyStaff(Request $request)
    {
        $name = $request->name;
        $reply = $request->reply ;
        $email = $request->email ;
        $id = $request->id ;

        $data = ['name'=>$name, 'reply'=>$reply];

        Mail::to($email)->send(new HelplineMail($data));
        // dd($request->all());
        Helpline::destroy($id);
        return redirect((route('staff-helpline')));
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
