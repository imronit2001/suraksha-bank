<?php

namespace App\Http\Controllers;

use App\Models\AddStaffForm;
use Illuminate\Http\Request;

class AddStaffFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add-staff');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $staff = new AddStaffForm();
        $staff->empType=$request->empType;
        $staff->branchName=$request->branchName;
        $staff->designation=$request->designation;
        $staff->firstName=$request->firstName;
        $staff->middleName=$request->middleName;
        $staff->lastName=$request->lastName;
        $staff->dob=$request->dob;
        $staff->email=$request->email;
        $staff->contact=$request->contact;
        $staff->gender=$request->gender;
        $staff->maritalStatus=$request->maritalStatus;
        $staff->qualification=$request->qualification;
        $staff->category=$request->category;
        $staff->disability=$request->disability;
        $staff->fatherName=$request->fatherName;
        $staff->motherName=$request->motherName;
        $staff->guardianName=$request->guardianName;
        $staff->address=$request->address;
        $staff->city=$request->city;
        $staff->district=$request->district;
        $staff->state=$request->state;
        $staff->pincode=$request->pincode;
        $staff->aadharNo=$request->aadharNo;
        $staff->panNo=$request->panNo;
        $staff->userid=$request->userid;
        $staff->password=$request->password;

        // print_r($request->all());

        if ($request->hasFile('aadharFile')) {
            $file = $request->file('aadharFile');
            $name = $file->hashName();
            $filename = "AadharCard-".time()."-".$name;
            $file->move('images/staff/aadharCard/',$filename);
            // echo "<br>Aadhar Name : ".$filename;
            $staff->aadharFile=$filename;
        }

        if ($request->hasFile('panFile')) {
            $file = $request->file('panFile');
            $name = $file->hashName();
            $filename = "PanCard-".time()."-".$name;
            $file->move('images/staff/panCard/',$filename);
            // echo "<br>Pan Name : ".$filename;
            $staff->panFile=$filename;
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = $file->hashName();
            $filename = "Photo-".time()."-".$name;
            $file->move('images/staff/photo/', $filename);
            // echo "<br>Photo Name : ".$filename;
            $staff->photo=$filename;
        }

        if ($request->hasFile('signature')) {
            $file = $request->file('signature');
            $name = $file->hashName();
            $filename = "Signature-".time()."-".$name;
            $file->move('images/staff/signature/', $filename);
            // echo "<br>Signature Name : ".$filename;
            $staff->signature=$filename;
        }

        $staff->save();

        return redirect((route('admin-add-staff')));


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
        $staff = AddStaffForm::find($id);
        return view('admin.edit-staff', ['staff' => $staff]);
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
        $staff = AddStaffForm::find($id);
        $staff->empType=$request->empType;
        $staff->branchName=$request->branchName;
        $staff->designation=$request->designation;
        $staff->firstName=$request->firstName;
        $staff->middleName=$request->middleName;
        $staff->lastName=$request->lastName;
        $staff->dob=$request->dob;
        $staff->email=$request->email;
        $staff->contact=$request->contact;
        $staff->gender=$request->gender;
        $staff->maritalStatus=$request->maritalStatus;
        $staff->qualification=$request->qualification;
        $staff->category=$request->category;
        $staff->disability=$request->disability;
        $staff->fatherName=$request->fatherName;
        $staff->motherName=$request->motherName;
        $staff->guardianName=$request->guardianName;
        $staff->address=$request->address;
        $staff->city=$request->city;
        $staff->district=$request->district;
        $staff->state=$request->state;
        $staff->pincode=$request->pincode;
        $staff->aadharNo=$request->aadharNo;
        $staff->panNo=$request->panNo;
        $staff->userid=$request->userid;
        $staff->password=$request->password;

        // print_r($request->all());

        if ($request->hasFile('aadharFile')) {
            $file = $request->file('aadharFile');
            $name = $file->hashName();
            $filename = "images/staff/aadharCard/AadharCard-".time()."-".$name;
            $file->move('images/staff/aadharCard/',$filename);
            // echo "<br>Aadhar Name : ".$filename;
            $staff->aadharFile=$filename;
        }

        if ($request->hasFile('panFile')) {
            $file = $request->file('panFile');
            $name = $file->hashName();
            $filename = "images/staff/panCard/PanCard-".time()."-".$name;
            $file->move('images/staff/panCard/',$filename);
            // echo "<br>Pan Name : ".$filename;
            $staff->panFile=$filename;
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = $file->hashName();
            $filename = "images/staff/photo/Photo-".time()."-".$name;
            $file->move('images/staff/photo/', $filename);
            // echo "<br>Photo Name : ".$filename;
            $staff->photo=$filename;
        }

        if ($request->hasFile('signature')) {
            $file = $request->file('signature');
            $name = $file->hashName();
            $filename = "images/staff/signature/Signature-".time()."-".$name;
            $file->move('images/staff/signature/', $filename);
            // echo "<br>Signature Name : ".$filename;
            $staff->signature=$filename;
        }

        $staff->save();

        // return redirect((route('admin-add-staff')));
        // return redirect()->back();
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
        AddStaffForm::destroy($id);
        return redirect((route('admin-manage-staff')));
        
    }
}
