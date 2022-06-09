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
    <form action="" method="post">
        @csrf
        
        <div class="AccountForm">
            <h4>1. Personal Details</h4>
            <label for="#">Prefix<span>*</span> : </label>
            <input type="radio" name="prefix" id="prefix" value="Mr." required>Mr.
            <input type="radio" name="prefix" id="prefix" value="Mrs.">Mrs.
            <input type="radio" name="prefix" id="prefix" value="Miss">Miss <br><br>
            <br><label for="#">Full Name<span>*</span> : </label>
            <input type="text" name="FullName" id="FullName" autocomplete="off">
  
            <br><label for="#">Date of Birth<span>*</span> : </label> 
            <input type="date" name="DOB" id="DOB" required>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Gender<span>*</span> : </label>
            <input type="radio" name="Gender" id="gender" value="Male" required>Male
            <input type="radio" name="Gender" id="gender" value="Female">Female 
            <input type="radio" name="Gender" id="gender" value="Third Gender">Third Gender


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Marital Status<span>*</span> : </label>
            <select name="MaritualStatus" id="">
                <option value="Married">Married</option>
                <option value="Unmarried">Unmarried</option>
                <option value="Single">Single</option>
                <option value="Divorced">Divorced</option>
            </select>
            <!-- <input type="radio" name="MaritalStatus" id="maritalStatus" value="" required>Married
            <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Unmarried
            <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Single
            <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Divorced
            <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Living Apart
            <input type="radio" name="MaritalStatus" id="maritalStatus" value="">Defacto <br> -->


            <br><label for="#">Name of Father<span>*</span> : </label>
            <input type="text" name="FatherName" id="" value="" required>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Name of Mother<span>*</span> : </label>
            <input type="text" name="MotherName" id="" value="" required>
            <div class="guardian">
                <br><label for="#">Name of Guardian <span>(In case of Minor)</span> : </label>
                <input type="text" name="GuardianName" id="" value="">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for=""> <small>Realtionship with Guardian : </small></label>
                <input type="text" name="RelationWithGuardian" value="">
            </div>
            <br><label for="#">Nationality<span>*</span> : </label>
            <select name="nationality" id="">
                <option value="America">America</option>
                <option value="Bhutan">Bhutan</option>
                <option value="China">China</option>
                <option value="India">India</option>
                <option value="Russia">Russia</option>
            </select>

            <br><label for="#">Residential Status : </label>
            <select name="ResidentialStatus" id="">
                <option value="IndividualResident">Resident Individual</option>
                <option value="NonResidentIndian">Non Resident Indian</option>
                <option value="ForeignIndian">Foreign Indian</option>
                <option value="IndianOriginPerson">Person of Indian Origin</option>
            </select>
            <!-- <input type="radio" name="ResidentialStatus" id="" value="ResidentIndividual">Resident Individual
            <input type="radio" name="ResidentialStatus" id="" value="NonResidentIndian">Non Resident Indian
            <input type="radio" name="ResidentialStatus" id="" value="ForeignIndian">Foreign Indian
            <input type="radio" name="ResidentialStatus" id="" value="IndianOriginPerson">Person of Indian Origin <br> -->


            <br><label for="#">Occupation Type<span>*</span> : </label><br>
            <select name="OccupationType" id="">
                <option value="service">Service</option>
                <option value="PrivateSector">Private Sector</option>
                <option value="PublicSector">Public Sector</option>
                <option value="GovernamentSector">Governament Sector</option>
                <option value="Student">Student</option>
                <option value="Professional">Professional</option>
                <option value="SelfEmployed">Self Employed</option>
                <option value="Retired">Retired</option>
                <option value="HouseWife">Housewife</option>
                <option value="Others">Others</option>
            </select>
            <!-- <input type="radio" name="OccupationType" id="" value="service">Service
            <input type="radio" name="OccupationType" id="" value="PrivateSector">Private Sector
            <input type="radio" name="OccupationType" id="" value="PublicSector">Public Sector
            <input type="radio" name="OccupationType" id="" value="GovernamentSector">Governament Sector
            <input type="radio" name="OccupationType" id="" value="Student">Student
            <input type="radio" name="OccupationType" id="" value="Professional">Professional
            <input type="radio" name="OccupationType" id="" value="SelfEmployed">Self Employed
            <input type="radio" name="OccupationType" id="" value="Retired">Retired
            <input type="radio" name="OccupationType" id="" value="HouseWife">Housewife
            <input type="radio" name="OccupationType" id="" value="Others">Others <br> -->


            <br><label for="#">Religion<span>*</span> : </label>
            <select name="religion" id="">
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Christian">Christian</option>
                <option value="Others">Others</option>
            </select>
            <!-- <input type="radio" name="religion" id="" value="Hindu">Hindu
            <input type="radio" name="religion" id="" value="Muslim">Muslim
            <input type="radio" name="religion" id="" value="Sikh">Sikh
            <input type="radio" name="religion" id="" value="Christian">Christian
            <input type="radio" name="religion" id="" value="Others">Others
            <input type="text" name="religion" id="" value=""> -->


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Category<span>*</span> : </label>
            <select name="" id="">
                <option value="">Choose ....</option>
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="Minority">Minority</option>
            </select>
            <!-- <input type="radio" name="category" id="" value="General">General
            <input type="radio" name="category" id="" value="OBC">OBC
            <input type="radio" name="category" id="" value="SC">SC
            <input type="radio" name="category" id="" value="ST">ST
            <input type="radio" name="category" id="" value="Minority">Minority <br> -->



            <br><label for="#">Customer Type/Status<span>*</span> : </label><br>
            <select name="" id="">
                <option value="Sr.Citizen">Sr. Citizen</option>
                <option value="Minor">Minor</option>
                <option value="NRI">NRI</option>
                <option value="Pensioner">Pensioner</option>
                <option value="General">General</option>
                <option value="Illitrate">Illitrate</option>
            </select>
            <!-- <input type="radio" name="customerType" id="" value="Sr.Citizen">Sr. Citizen
            <input type="radio" name="CustomerType" id="" value="Minor">Minor
            <input type="radio" name="CustomerType" id="" value="NRI">NRI
            <input type="radio" name="CustomerType" id="" value="Pensioner">Pensioner
            <input type="radio" name="CustomerType" id="" value="General">General
            <input type="radio" name="CustomerType" id="" value="Illitrate">Illitrate -->


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="#">Person with Disability<span>*</span> : </label>
            <input type="radio" name="Disability" id="" value="Yes">Yes
            <input type="radio" name="Disability" id="" value="No">No

            <br><label for="#">Educational Qualification<span>*</span> : </label>
            <select name="" id="">
                <option value="BelowSSC">Below SSC</option>
                <option value="SSC">SSC</option>
                <option value="HSC">HSC</option>
                <option value="Graduate">Graduate</option>
                <option value="PostGraduate">Post Graduate</option>
                <option value="Professional">Professional</option>
                <option value="Others">Others</option>
            </select>
            <!-- <input type="radio" name="Qualification" id="" value="BelowSSC">Below SSC
            <input type="radio" name="Qualification" id="" value="SSC">SSC
            <input type="radio" name="Qualification" id="" value="HSC">HSC
            <input type="radio" name="Qualification" id="" value="Graduate">Graduate
            <input type="radio" name="Qualification" id="" value="PostGraduate">Post Graduate
            <input type="radio" name="Qualification" id="" value="Professional">Professional
            <input type="radio" name="Qualification" id="" value="Others">Others <br> -->


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

            <select name="AddressProof" id="">
                <option value="VoterCard">Voter's Identity Card</option>
                <option value="Passport">Passport</option>
                <option value="DrivingLicence">Driving Licence</option>
                <option value="NREGACard">NREGA Job Card</option>
                <option value="KYC">KYC</option>
                <option value="Aadhar">Aadhar No.</option>
            </select>

            <!-- <input type="radio" name="AddressProof" id="" value="Passport" required>Passport <small>(Mandatory in case of NRI/PIO)</small>
            <input type="radio" name="AddressProof" id="" value="VoterCard">Voter's Identity Card
            <input type="radio" name="AddressProof" id="" value="DrivingLicence">Driving Licence
            <input type=radio"" name="AddressProof" id="" value="NREGACard">NREGA Job Card <input type="radio" name="AddressProof" id="" value="Letter"><small>Letter issued by National Population Register containing details of Name & Address</small>
            <input type="radio" name="AddressProof" id="" value="Aadhar">Aadhar No.
            <input type="radio" name="AddressProof" id="" value="KYC">KYC
            <input type="radio" name="AddressProof" id="" value="OfflineVerification">Offline Verification <br> -->


            <br><label for="">Document/Identification Number <span>*</span></label>
            <input type="text" name="AddressProofNumber" id="" value=""required> 
            <label for="">Issued By <span>*</span></label>
            <input type="text" name="AddressProofNumber" id="" value=""required> <br>
            
            
            <h4>4. Address Details <span>*</span></h4>
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
            
            <h4>5. Declaration Cum undertaking Cum Self-Certification</h4>
            <p><small>I have read the copy of <b><a href="#">Terms & Conditions</a></b> of the Account opening given to me. The <b>Terms & Conditions</b> have been explained ti me/us and having understood. I accept the same. <br>I hereby declare that I have submitted the Aadhar Card issued by UIDAI voluntarily for identification and/or address proof towards the compliance of KYC norms under the PMLA 2002. <br>I hereby consent that the bank may verify the same with the UIDAI and authorise the UIDAI expressly to release the identity and address through biometric authentication to the bank.</small></p>
            <br><label for="#">Applicant's photo <span>*</span></label>
            <input type="file" name="ApplicantPhoto" id="" value=""> 
            
            <br><label for="#">Applicant's Aadhar <span>*</span></label>
            <input type="file" name="ApplicantPhoto" id="" value=""> 

            <label for="#">Applicant's Signature/Thumb Impression <span>*</span></label>
            <input type="file" name="ApplicantSignature" id="" value="">
            
            <br><br><label for="#">Place <span>*</span> : </label>
            <input type="text" name="Place" id="" value="">
            
            <label for="#">Date <span>*</span> : </label>
            <input type="date" name="" id="" value=""><br>
            
            <div class="btn-box">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</body>
</html>