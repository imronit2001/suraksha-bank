<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    function login(){
        return view('auth.login');
    }
    public function Logout(){
        auth()->logout();
    
        session()->flash('message', 'Some goodbye message');
    
        return view('auth.login');
      }
    public function index(){
        $data = Auth::user()->role;

        if($data == '1'){
            return view('staff.home');
        }

        if($data == '2'){
            return view('admin.dashboard');
        }
        else{
            return view('customer.dashboard');
        }
    }
        public function add_staff(Request $request){
            // $data = new User();
            // $data->name = $request->name;
            // $data->email = $request->email;
            // $data->role = '1';
            // $data->password = bcrypt($request->password);


        $staff = new User();
        $staff->empType=$request->empType;
        $staff->branchName=$request->branchName;
        $staff->designation=$request->designation;
        $staff->firstName=$request->firstName;
        $staff->middleName=$request->middleName;
        $staff->lastName=$request->lastName;
        $staff->dob=$request->dob;
        $staff->email=$request->email;
        $staff->role = '1';
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
        $staff->password=bcrypt($request->password);

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
            return view('admin.dashboard');
        }
}
