<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/AccountOpening.css')}}">
    <link rel="shortcut icon" href="{{url('../images/favicon.png')}}" type="image/png">
    <title>Account Opening Form</title>
</head>
<body>
    <h1>
        <ul>
            <li><a href="{{url('/')}}">Suraksha Bank</a></li>            
        </ul>
    </h1>
    <h3>Account Opening Form for Individual (Part-1) Customer Information Sheet (CIF Creation/ Amendment)</h3>
    <p>In case of joint accounts, Part-1(CIF) to be taken for each Customer)</p>
    
    @extends('layouts.app')
    
    @section('content')
        <div class="customerDetailsFormContainer">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="registration">
                        <div class="card-header">{{ __('Register') }}</div>

                        <!-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    
                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div> -->
                            
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                            
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                            
                        <!-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->
                    </div>

                    <div class="AccountForm">
                        <h4>1. Personal Details</h4>
                        <label for="#">Prefix<span>*</span> : </label>
                        <input type="radio" name="prefix" id="prefix" value="Mr." required>Mr.
                        <input type="radio" name="prefix" id="prefix" value="Mrs.">Mrs.
                        <input type="radio" name="prefix" id="prefix" value="Miss">Miss <br><br>
                        <div class="name">
                            <br><label for="#">First Name<span>*</span> : </label>
                            <input type="text" name="FirstName" id="FirstName" autocomplete="off">
                            <br><label for="#">Middle Name : </label>
                            <input type="text" name="MiddleName" id="MidName" autocomplete="off">
                            <br><label for="#">Last Name<span>*</span> : </label>
                            <input type="text" name="LastName" id="LastName" autocomplete="off" required>
                        </div>  
                        <br><label for="#">Date of Birth<span>*</span> : </label> 
                        <input type="date" name="DOB" id="DOB" required>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Gender<span>*</span> : </label>
                        <input type="radio" name="Gender" id="gender" value="Male" required>Male
                        <input type="radio" name="Gender" id="gender" value="Female">Female 
                        <input type="radio" name="Gender" id="gender" value="Third Gender">Third Gender
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Marital Status<span>*</span> : </label>
                        <input type="radio" name="MaritalStatus" id="maritalStatus" value="" required>Married
                        <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Unmarried
                        <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Single
                        <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Divorced
                        <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Living Apart
                        <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Defacto <br>
                        <br><label for="#">Name of Father<span>*</span> : </label>
                        <input type="text" name="FatherName" id="" value="" required>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Name of Mother<span>*</span> : </label>
                        <input type="text" name="MotherName" id="" value="" required>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Illiterate : </label>
                        <input type="radio" name="illiterate" id="" value="Yes">Yes
                        <input type="radio" name="illiterate" id="" value="No">No 
                        <div class="guardian">
                            <br><label for="#">Name of Guardian <span>(In case of Minor)</span> : </label>
                            <input type="text" name="GuardianName" id="" value="">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for=""> <small>Realtionship with Guardian : </small></label>
                            <input type="text" name="RelationWithGuardian" value="">
                        </div>
                        <br><label for="#">Nationality<span>*</span> : </label>
                        <input type="radio" name="Nationality" value="Indian">Indian
                        <input type="radio" name="Nationality" value="Others">Others 
                        <label for="#"><small>Country Name (If Others) : </small></label>
                        <input type="text" name="Nationality"><br>
                        <br><label for="#">Residential Status : </label>
                        <input type="radio" name="ResidentialStatus" id="" value="ResidentIndividual">Resident Individual
                        <input type="radio" name="ResidentialStatus" id="" value="NonResidentIndian">Non Resident Indian
                        <input type="radio" name="ResidentialStatus" id="" value="ForeignIndian">Foreign Indian
                        <input type="radio" name="ResidentialStatus" id="" value="IndianOriginPerson">Person of Indian Origin <br>
                        <br><label for="#">Occupation Type<span>*</span> : </label><br>
                        <input type="radio" name="OccupationType" id="" value="service" required>Service
                        <input type="radio" name="OccupationType" id="" value="PrivateSector">Private Sector
                        <input type="radio" name="OccupationType" id="" value="PublicSector">Public Sector
                        <input type="radio" name="OccupationType" id="" value="GovernamentSector">Governament Sector
                        <input type="radio" name="OccupationType" id="" value="Student">Student
                        <input type="radio" name="OccupationType" id="" value="Professional">Professional
                        <input type="radio" name="OccupationType" id="" value="SelfEmployed">Self Employed
                        <input type="radio" name="OccupationType" id="" value="Retired">Retired
                        <input type="radio" name="OccupationType" id="" value="HouseWife">Housewife
                        <input type="radio" name="OccupationType" id="" value="Others">Others <br>
                        <br><label for="#">Religion<span>*</span> : </label>
                        <input type="radio" name="religion" id="" value="Hindu" required>Hindu
                        <input type="radio" name="religion" id="" value="Muslim">Muslim
                        <input type="radio" name="religion" id="" value="Sikh">Sikh
                        <input type="radio" name="religion" id="" value="Christian">Christian
                        <input type="radio" name="religion" id="" value="Others">Others
                        <input type="text" name="religion" id="" value="">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Category<span>*</span> : </label>
                        <input type="radio" name="category" id="" value="General" required>General
                        <input type="radio" name="category" id="" value="OBC">OBC
                        <input type="radio" name="category" id="" value="SC">SC
                        <input type="radio" name="category" id="" value="ST">ST
                        <input type="radio" name="category" id="" value="Minority">Minority <br>
                        <br><label for="#">Customer Type/Status<span>*</span> : </label><br>
                        <input type="radio" name="customerType" id="" value="">Sr. Citizen
                        <input type="radio" name="CustomerType" id="" value="Minor">Minor
                        <input type="radio" name="CustomerType" id="" value="NRI">NRI
                        <input type="radio" name="CustomerType" id="" value="Pensioner">Pensioner
                        <input type="radio" name="CustomerType" id="" value="General">General
                        <input type="radio" name="CustomerType" id="" value="Illitrate">Illitrate
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Person with Disability<span>*</span> : </label>
                        <input type="radio" name="Disability" id="" value="Yes">Yes
                        <input type="radio" name="Disability" id="" value="No">No
                        <label for="#"><Small>If Yes</Small></label>
                        <input type="checkbox" name="DisabilityClassification" id="" value="VisuallyImpaired">Visually Impaired
                        <input type="checkbox" name="DisabilityClassification" id="" value="DifferentlyAbled">Differently Abled <br>
                        <br><label for="#">Educational Qualification<span>*</span> : </label>
                        <input type="radio" name="Qualification" id="" value="BelowSSC" required>Below SSC
                        <input type="radio" name="Qualification" id="" value="SSC">SSC
                        <input type="radio" name="Qualification" id="" value="HSC">HSC
                        <input type="radio" name="Qualification" id="" value="Graduate">Graduate
                        <input type="radio" name="Qualification" id="" value="PostGraduate">Post Graduate
                        <input type="radio" name="Qualification" id="" value="Professional">Professional
                        <input type="radio" name="Qualification" id="" value="Others">Others <br>
                        <label for="#"><strong><br>PAN/Tax Identification Number or equivalent <small> (if issued by Jurisdiction)</small> </strong> : </strong></label>
                        <input type="text" name="PanNumber" id="" value=""> <small>(If PAN not submitted, submit form 60-Annexue II)</small>
                            
                        <h4>2. Contact Details</h4>
                        <label for="#">Mobile No.<span>*</span> : </label>
                        <input type="text" name="Mobile" id="" value="" required>
                        <label for="#">Email ID <span>*</span> : </label>
                        <input type="text" name="Email" id="" value="" required>
                        <label for="">Tel : </label>
                        <input type="text" name="Telephone" id="" value="">
                        
                        <h4>3. Proof of Identity/Address <small>(Please choose the appropriate Box (any one ID type) and give details) </small><span>*</span></h4>
                        <input type="radio" name="AddressProof" id="" value="Passport" required>Passport <small>(Mandatory in case of NRI/PIO)</small>
                        <input type="radio" name="AddressProof" id="" value="VoterCard">Voter's Identity Card
                        <input type="radio" name="AddressProof" id="" value="DrivingLicence">Driving Licence
                        <input type="radio" name="AddressProof" id="" value="NREGACard">NREGA Job Card <input type="radio" name="AddressProof" id="" value="Letter"><small>Letter issued by National Population Register containing details of Name & Address</small>
                        <input type="radio" name="AddressProof" id="" value="Aadhar">Proof of Possession of Aadhar No.
                        <input type="radio" name="AddressProof" id="" value="KYC">KYC
                        <input type="radio" name="AddressProof" id="" value="OfflineVerification">Offline Verification <br>
                        <br><label for="">Document/Identification Number <span>*</span></label>
                        <input type="text" name="AddressProofNumber" id="" value=""required> 
                        <label for="">Issued By <span>*</span></label>
                        <input type="text" name="AddressProofNumber" id="" value=""required> <br>
    
                        
                        <h4>4. Address Details <span>*</span> <small> (as per Proof of Address submitted at step 3.)</small></h4>
                        <label for="#">Address Type <span>*</span> : </label>
                        <input type="radio" name="AddressType" id="" value="Residential/Business"required>Residential/Business
                        <input type="radio" name="AddressType" id="" value="Residential">Residential
                        <input type="radio" name="AddressType" id="" value="Business">Business
                        <input type="radio" name="AddressType" id="" value="RegisteredOffice">Registered Office
                        <input type="radio" name="AddressType" id="" value="Overseas">Overseas <small>mandatory for NRI/PIO)</small> <br>
                        
                        <br><label for="#">Address <span>*</span> : </label>
                        <input type="text" class="add" name="Address" id="" value="">
                        <label for="">City/Village : </label>
                        <input type="text" name="City" id="" value="">
                        <label for="#">District <span>*</span> : </label>
                        <input type="text" name="District" id="" value=""><br>
                        <br><label for="#">State <span>*</span> : </label>
                        <input type="text" name="State" id="" value="">
                        <label for="#">Pin <span>*</span> : </label>
                        <input type="text" name="Pin" id="" value="">
                        <label for="#">Country : </label>
                        <input type="text" name="Country" id="" value=""><br>
                        <br><p>Is the address provided  above Current Address ? <span>*</span> <input type="radio" name="IsCurrentAddress" id="" value="Yes">Yes<input type="radio" name="currAddress" id="" value="No">No <small> If selected 'No', then please provide Current Address at Step 5 along with Documentary Evidence as per Step 6). </small></p>

                        <h4>5. Address Details <small>
                            <input type="radio" name="AddressDetails" id="" value="Current">Current
                            <input type="radio" name="AddressDetails" id="" value="Correspondance">Correspondance
                            <input type="radio" name="AddressDetails" id="" value="Permanent">Permanent</small>
                        </h4>
                        <label for="#">Address Type <span>*</span> : </label>
                        <input type="radio" name="CurrentAddressType" id="" value="Residential/Business"required>Residential/Business
                        <input type="radio" name="CurrentAddressType" id="" value="Residential">Residential
                        <input type="radio" name="CurrentAddressType" id="" value="Business">Business
                        <input type="radio" name="CurrentAddressType" id="" value="RegisteredOffice">Registered Office
                        <input type="radio" name="CurrentAddressType" id="" value="Unspecified">Unspecified <br>
                        
                        <br><label for="#">Address <span>*</span> : </label>
                        <input type="text" class="add" name="CurrentAddress" id="" value="">
                        <label for="">City/Village : </label>
                        <input type="text" name="CurrentCity" id="" value="">
                        <label for="#">District <span>*</span> : </label>
                        <input type="text" name="CurrentDistrict" id="" value=""><br>   
                        <label for="#">State</label>
                        <input type="text" name="CurrentState" id="" value="">
                        <label for="#">Pin <span>*</span> : </label>
                        <input type="text" name="CurrentPin" id="" value="">
                        <label for="#">Country : </label>
                        <input type="text" name="CurrentCountry" id="" value="">
                
                        <h4>7. Declaration Cum undertaking Cum Self-Certification</h4>
                        <p><small>I have read the copy of <b><a href="#">Terms & Conditions</a></b> of the Account opening given to me. The <b>Terms & Conditions</b> have been explained ti me/us and having understood. I accept the same. <br>I hereby declare that I have submitted the Aadhar Card issued by UIDAI voluntarily for identification and/or address proof towards the compliance of KYC norms under the PMLA 2002. <br>I hereby consent that the bank may verify the same with the UIDAI and authorise the UIDAI expressly to release the identity and address through biometric authentication to the bank.</small></p>
                        <br><label for="#">Applicant's photo <span>*</span></label>
                        <input type="file" name="ApplicantPhoto" id="" value=""> 
                        <label for="#">Applicant's Signature/Thumb Impression <span>*</span></label>
                        <input type="file" name="ApplicantSignature" id="" value="">
                        
                        <br><br><label for="#">Place <span>*</span> : </label>
                        <input type="text" name="Place" id="" value="">
                            
                        <label for="#">Date <span>*</span> : </label>
                        <input type="date" name="" id="" value=""><br>
                        
                        <div class="btn-box">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</body>
</html>