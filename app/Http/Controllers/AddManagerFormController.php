<?php

namespace App\Http\Controllers;

use App\Models\AddManagerForm;
use Illuminate\Http\Request;

class AddManagerFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add-manager');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $manager = new AddManagerForm();
        $manager->branchName=$request->branchName;
        $manager->firstName=$request->firstName;
        $manager->middleName=$request->middleName;
        $manager->lastName=$request->lastName;
        $manager->fatherName=$request->fatherName;
        $manager->motherName=$request->motherName;
        $manager->email=$request->email;
        $manager->contact=$request->contact;
        $manager->gender=$request->gender;
        $manager->maritalStatus=$request->maritalStatus;
        $manager->qualification=$request->qualification;
        $manager->dob=$request->dob;
        $manager->address=$request->address;
        $manager->state=$request->state;
        $manager->pincode=$request->pincode;
        $manager->category=$request->category;
        $manager->disability=$request->disability;
        $manager->aadharNo=$request->aadharNo;
        $manager->userid=$request->userid;
        $manager->password=$request->password;

        // print_r($request->all());

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = $file->hashName();
            $filename = "Photo-".time()."-".$name;
            $file->move('images/admin/photo/', $filename);
            // echo "<br>Photo Name : ".$filename;
            $manager->photo=$filename;
        }

        if ($request->hasFile('signature')) {
            $file = $request->file('signature');
            $name = $file->hashName();
            $filename = "Signature-".time()."-".$name;
            $file->move('images/admin/signature/', $filename);
            // echo "<br>Signature Name : ".$filename;
            $manager->signature=$filename;
        }

        $manager->save();

        echo '<script type="text/javascript">'
			   , 'history.go(-2);'
			   , '</script>';
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
        $manager = AddManagerForm::find($id);
        return view('admin.edit-manager', ['manager' => $manager]);
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
        $manager = AddManagerForm::find($id);
        $manager->branchName=$request->branchName;
        $manager->firstName=$request->firstName;
        $manager->middleName=$request->middleName;
        $manager->lastName=$request->lastName;
        $manager->fatherName=$request->fatherName;
        $manager->motherName=$request->motherName;
        $manager->email=$request->email;
        $manager->contact=$request->contact;
        $manager->gender=$request->gender;
        $manager->maritalStatus=$request->maritalStatus;
        $manager->qualification=$request->qualification;
        $manager->dob=$request->dob;
        $manager->address=$request->address;
        $manager->state=$request->state;
        $manager->pincode=$request->pincode;
        $manager->category=$request->category;
        $manager->disability=$request->disability;
        $manager->aadharNo=$request->aadharNo;
        $manager->userid=$request->userid;
        $manager->password=$request->password;

        // print_r($request->all());

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = $file->hashName();
            $filename = "images/admin/photo/Photo-".time()."-".$name;
            $file->move('images/admin/photo/', $filename);
            // echo "<br>Photo Name : ".$filename;
            $manager->photo=$filename;
        }

        if ($request->hasFile('signature')) {
            $file = $request->file('signature');
            $name = $file->hashName();
            $filename = "images/admin/signature/Signature-".time()."-".$name;
            $file->move('images/admin/signature/', $filename);
            // echo "<br>Signature Name : ".$filename;
            $manager->signature=$filename;
        }

        $manager->save();

        echo '<script type="text/javascript">'
			   , 'history.go(-2);'
			   , '</script>';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddManagerForm::destroy($id);
    }
}
