<?php

namespace App\Http\Controllers;

use App\Models\KnowYourCustomer;
use Illuminate\Http\Request;

class KYCFormController extends Controller
{
    public function index(){
        return view('customer.KYC-Form');
    } 

    public function create(Request $request){
        $KYCForm = new KnowYourCustomer;
            $KYCForm->formType=$request->formType;
            $KYCForm->prefix=$request->prefix;
            $KYCForm->FullName=$request->FullName;
            $KYCForm->FatherName=$request->FatherName;
            $KYCForm->gender=$request->gender;
            $KYCForm->DOB=$request->dob;
            $KYCForm->MaritalStatus=$request->MaritalStatus;
            $KYCForm->Nationality=$request->Nationality;
            $KYCForm->ResidentialStatus=$request->ResidentialStatus;
            $KYCForm->PanNumber=$request->PanNumber;
            $KYCForm->AadharNumber=$request->AadharNumber;
            $KYCForm->Address=$request->Address;
            $KYCForm->City=$request->City;
            $KYCForm->Pin=$request->Pin;
            $KYCForm->State=$request->State;
            $KYCForm->Country=$request->Country;
            $KYCForm->Mobile=$request->Mobile;
            $KYCForm->Telephone=$request->Telephone;
            $KYCForm->AddressProofNumber=$request->AddressProofNumber;
            $KYCForm->Date=$request->Date;
            
            if ($request->hasFile('ApplicantPhoto')) {
                $file = $request->file('ApplicantPhoto');
                $name = $file->hashName();
                $filename = "ApplicantPhoto-".time()."-".$name;
                $file->move('images/customer/ApplicantPhoto/',$filename);
                $KYCForm->ApplicantPhoto=$filename;
            }
    
            if ($request->hasFile('ApplicantSignature')) {
                $file = $request->file('ApplicantSignature');
                $name = $file->hashName();
                $filename = "ApplicantSignature-".time()."-".$name;
                $file->move('images/customer/ApplicantSignature/', $filename);
                $KYCForm->signature=$filename;
            }
             
            if ($request->hasFile('ApplicantAadhar')) {
                $file = $request->file('ApplicantAadhar');
                $name = $file->hashName();
                $filename = "ApplicantAadhar-".time()."-".$name;
                $file->move('images/customer/ApplicantAadhar/', $filename);
                $KYCForm->signature=$filename;
            }

            if ($request->hasFile('ApplicantPan')) {
                $file = $request->file('ApplicantPan');
                $name = $file->hashName();
                $filename = "ApplicantPan-".time()."-".$name;
                $file->move('images/customer/ApplicantPan/', $filename);
                $KYCForm->signature=$filename;
            }
            // dd($request);
        $KYCForm->save();

        return redirect('/customer/')->with('Success', 'Data Added');
    }

    function KYCList(){
        $data = KnowYourCustomer::all();
        // echo "Code Here";
        return view('staff/KYCApplication',['data'=>$data]);
    }
}
