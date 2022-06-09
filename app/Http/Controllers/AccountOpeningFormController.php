<?php

namespace App\Http\Controllers;

use App\Models\AccountOpeningTable;
use Illuminate\Http\Request;

class AccountOpeningFormController extends Controller
{
    public function index(){
        return view('AccountOpeningForm');
    } 

    public function create(Request $request){
        $AccountOpeningForm = new AccountOpeningTable;
            $AccountOpeningForm->email=$request->email;
            $AccountOpeningForm->password=$request->password;
            $AccountOpeningForm->prefix=$request->prefix;
            $AccountOpeningForm->FirstName=$request->FirstName;
            $AccountOpeningForm->MidName=$request->MidName;
            $AccountOpeningForm->LastName=$request->LastName;
            $AccountOpeningForm->DOB=$request->DOB;
            $AccountOpeningForm->gender=$request->gender;
            $AccountOpeningForm->MaritalStatus=$request->MaritalStatus;
            $AccountOpeningForm->FatherName=$request->FatherName;
            $AccountOpeningForm->MotherName=$request->MotherName;
            $AccountOpeningForm->illiterate=$request->illiterate;
            $AccountOpeningForm->GaurdianName=$request->GaurdianName;
            $AccountOpeningForm->RelationWithGuardian=$request->RelationWithGuardian;
            $AccountOpeningForm->Nationality=$request->Nationality;
            $AccountOpeningForm->ResidentialStatus=$request->ResidentialStatus;
            $AccountOpeningForm->OccupationType=$request->OccupationType;
            $AccountOpeningForm->religion=$request->religion;
            $AccountOpeningForm->category=$request->category;
            $AccountOpeningForm->CustomerType=$request->CustomerType;
            $AccountOpeningForm->Disability=$request->Disability;
            $AccountOpeningForm->Qualification=$request->Qualification;
            $AccountOpeningForm->PanNumber=$request->PanNumber;
            $AccountOpeningForm->Mobile=$request->Mobile;
            $AccountOpeningForm->Email=$request->Email;
            $AccountOpeningForm->Telephone=$request->Telephone;
            $AccountOpeningForm->AddressProof=$request->AddressProof;
            $AccountOpeningForm->AddressProofNumber=$request->AddressProofNumber;
            $AccountOpeningForm->issuedBy=$request->issuedBy;
            $AccountOpeningForm->AddressType=$request->AddressType;
            $AccountOpeningForm->Address=$request->Address;
            $AccountOpeningForm->City=$request->City;
            $AccountOpeningForm->District=$request->District;
            $AccountOpeningForm->State=$request->State;
            $AccountOpeningForm->Pin=$request->Pin;
            $AccountOpeningForm->Country=$request->Country;
            $AccountOpeningForm->IsCurrentAddress=$request->IsCurrentAddress;
            $AccountOpeningForm->AddressDetails=$request->AddressDetails;
            $AccountOpeningForm->CurrentAddressType=$request->CurrentAddressType;
            $AccountOpeningForm->CurrentAddress=$request->CurrentAddress;
            $AccountOpeningForm->CurrentCity=$request->CurrentCity;
            $AccountOpeningForm->CurrentDistrict=$request->CurrentDistrict;
            $AccountOpeningForm->CurrentState=$request->CurrentState;
            $AccountOpeningForm->CurrentPin=$request->CurrentPin;
            $AccountOpeningForm->CurrentCountry=$request->CurrentCountry;
            $AccountOpeningForm->Place=$request->Place;
            
            if ($request->hasFile('ApplicantPhoto')) {
                $file = $request->file('ApplicantPhoto');
                $name = $file->hashName();
                $filename = "ApplicantPhoto-".time()."-".$name;
                $file->move('images/staff/ApplicantPhoto/',$filename);
                // echo "<br>Aadhar Name : ".$filename;
                $AccountOpeningForm->ApplicantPhoto=$filename;
            }
    
            if ($request->hasFile('ApplicantSignature')) {
                $file = $request->file('ApplicantSignature');
                $name = $file->hashName();
                $filename = "ApplicantSignature-".time()."-".$name;
                $file->move('images/staff/ApplicantSignature/', $filename);
                // echo "<br>Signature Name : ".$filename;
                $AccountOpeningForm->ApplicantSignature=$filename;
            }

            // dd($request);
            $AccountOpeningForm->save();
        return redirect('/Customer/')->with('Success','Data Added');

    }
}
