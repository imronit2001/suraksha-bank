<?php

namespace App\Http\Controllers;

use App\Models\KYCForm;
use Illuminate\Http\Request;

class KYCFormController extends Controller
{
    public function index(){
        return view('customer.KYC-Form');
    } 

    public function create(Request $request){
        $KYCForm = new KYCForm;
            $KYCForm->prefix=$request->prefix;
            $KYCForm->FirstName=$request->FirstName;
            $KYCForm->MidName=$request->MidName;
            $KYCForm->LastName=$request->LastName;
            $KYCForm->gender=$request->gender;
            $KYCForm->DOB=$request->DOB;
            $KYCForm->MaritalStatus=$request->MaritalStatus;
            $KYCForm->Nationality=$request->Nationality;
            $KYCForm->ResidentialStatus=$request->ResidentialStatus;
            $KYCForm->PanNumber=$request->PanNumber;
            $KYCForm->AadharNumber=$request->AadharNumber;
            $KYCForm->ProofOfIdentity=$request->ProofOfIdentity;
            $KYCForm->CorrespondenceAddress=$request->CorrespondenceAddress;
            $KYCForm->City=$request->City;
            $KYCForm->Pin=$request->Pin;
            $KYCForm->State=$request->State;
            $KYCForm->Country=$request->Country;
            $KYCForm->Mobile=$request->Mobile;
            $KYCForm->Telephone=$request->Telephone;
            $KYCForm->CurrentAddress=$request->CurrentAddress;
            $KYCForm->CurrentCity=$request->CurrentCity;
            $KYCForm->CurrentState=$request->CurrentState;
            $KYCForm->CurrentPin=$request->CurrentPin;
            $KYCForm->CurrentCountry=$request->CurrentCountry;
            $KYCForm->AddressProofNumber=$request->AddressProofNumber;
            $KYCForm->AnnualIncome=$request->AnnualIncome;
            $KYCForm->NetWorth=$request->NetWorth;
            $KYCForm->Date=$request->Date;
            $KYCForm->OccupationType=$request->OccupationType;
            
            if ($request->hasFile('ApplicantPhoto')) {
                $file = $request->file('ApplicantPhoto');
                $name = $file->hashName();
                $filename = "ApplicantPhoto-".time()."-".$name;
                $file->move('images/staff/ApplicantPhoto/',$filename);
                // echo "<br>Aadhar Name : ".$filename;
                $KYCForm->ApplicantPhoto=$filename;
            }
    
            if ($request->hasFile('ApplicantSignature')) {
                $file = $request->file('ApplicantSignature');
                $name = $file->hashName();
                $filename = "ApplicantSignature-".time()."-".$name;
                $file->move('images/staff/ApplicantSignature/', $filename);
                // echo "<br>Signature Name : ".$filename;
                $KYCForm->signature=$filename;
            }

        $KYCForm->save();

        return redirect('/Customer/')->with('Success', 'Data Added');
    }
}
