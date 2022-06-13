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
    <p>In case of joint accounts, Part-1(CIF) to be taken for each Customer</p>
    <form action="" method="post">
        @csrf
        
        <div class="AccountForm">
            <h4>1. Personal Details</h4>
            <label for="#">Prefix<span>*</span> : </label>
            <input type="radio" name="prefix" id="prefix" value="Mr." required>Mr.
            <input type="radio" name="prefix" id="prefix" value="Mrs.">Mrs.
            <input type="radio" name="prefix" id="prefix" value="Miss">Miss <br>

            <br><label for="#">Full Name<span>*</span> : </label>
            <input type="text" name="FullName" id="FullName" autocomplete="off"><br>
  
            <br><label for="#">Date of Birth<span>*</span> : </label> 
            <input type="date" name="DOB" id="DOB" required><br>
            
            <br><label for="#">Gender<span>*</span> : </label>
            <input type="radio" name="gender" id="gender" value="Male" required>Male
            <input type="radio" name="gender" id="gender" value="Female">Female 
            <input type="radio" name="gender" id="gender" value="Third Gender">Third Gender


            <br><br><label for="#">Marital Status<span>*</span> : </label>
            <select name="MaritalStatus" id="">
                <option value="" selected>Choose....</option>
                <option value="Married">Married</option>
                <option value="Unmarried">Unmarried</option>
                <option value="Single">Single</option>
                <option value="Divorced">Divorced</option>
            </select>

            <br><br><label for="#">Name of Father<span>*</span> : </label>
            <input type="text" name="FatherName" id="" value="" required>
            <br><br><label for="#">Name of Mother<span>*</span> : </label>
            <input type="text" name="MotherName" id="" value="" required>


            <div class="guardian">
            <br><br><label for="#">Name of Guardian <span>(In case of Minor)</span> : </label>
                <input type="text" name="GuardianName" id="" value="">
                <br><br><label for="">Realtionship with Guardian : </label>
                <input type="text" name="RelationWithGuardian" value="">
            </div>


            <br><br><label for="#">Nationality<span>*</span> : </label>
            <select name="Nationality" id="">
                <option value="" selected>Choose....</option>
                <option value="America">America</option>
                <option value="Bhutan">Bhutan</option>
                <option value="China">China</option>
                <option value="India">India</option>
                <option value="Russia">Russia</option>
            </select>

            <br><br><label for="#">Residential Status : </label>
            <select name="ResidentialStatus" id="">
                <option value="" selected>Choose....</option>
                <option value="IndividualResident">Resident Individual</option>
                <option value="NonResidentIndian">Non Resident Indian</option>
                <option value="ForeignIndian">Foreign Indian</option>
                <option value="IndianOriginPerson">Person of Indian Origin</option>
            </select>

            <br><br><label for="#">Occupation Type<span>*</span> : </label>
            <select name="OccupationType" id="">
                <option value="" selected>Choose....</option>
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

            <br><br><label for="#">Religion<span>*</span> : </label>
            <select name="religion" id="">
                <option value="" selected>Choose....</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Christian">Christian</option>
                <option value="Others">Others</option>
            </select>

            <br><br><label for="#">Category<span>*</span> : </label>
            <select name="category" id="">
                <option value="" selected>Choose ....</option>
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="Minority">Minority</option>
            </select>

            <br><br><label for="#">Customer Type/Status<span>*</span> : </label>
            <select name="CustomerType" id="">
                <option value="" selected>Choose....</option>
                <option value="Sr.Citizen">Sr. Citizen</option>
                <option value="Minor">Minor</option>
                <option value="NRI">NRI</option>
                <option value="Pensioner">Pensioner</option>
                <option value="General">General</option>
                <option value="Illitrate">Illitrate</option>
            </select>
            <br><br><label for="#">Person with Disability<span>*</span> : </label>
            <input type="radio" name="Disability" id="" value="Yes">Yes
            <input type="radio" name="Disability" id="" value="No">No

            <br><br><label for="#">Educational Qualification<span>*</span> : </label>
            <select name="Qualification" id="">
                <option value="" selected>Choose....</option>
                <option value="BelowSSC">Below SSC</option>
                <option value="SSC">SSC</option>
                <option value="HSC">HSC</option>
                <option value="Graduate">Graduate</option>
                <option value="PostGraduate">Post Graduate</option>
                <option value="Professional">Professional</option>
                <option value="Others">Others</option>
            </select>

            <br><br><label for="#"><strong><br>PAN/Tax Identification Number or equivalent <small> (if issued by Jurisdiction)</small> </strong> : </strong></label>
            <input type="text" name="PanNumber" id="" value=""> <small>(If PAN not submitted, submit form 60-Annexue II)</small>
            
            <h4>2. Contact Details</h4>
            <br><br><label for="#">Mobile No.<span>*</span> : </label>
            <input type="text" name="Mobile" id="" value="" required>
            <br><br><label for="#">Email ID <span>*</span> : </label>
            <input type="text" name="Email" id="" value="" required>
            <br><br><label for="">Tel : </label>
            <input type="text" name="Telephone" id="" value="">
            

            <h4>3. Proof of Identity/Address <small>(Please choose the appropriate Box (any one ID type) and give details) </small><span>*</span></h4>
            <br><br><label for="">Select Address Proof :</label>
            <select name="AddressProof" id="">
                <option value="" selected>Choose....</option>
                <option value="VoterCard">Voter's Identity Card</option>
                <option value="Passport">Passport</option>
                <option value="DrivingLicence">Driving Licence</option>
                <option value="NREGACard">NREGA Job Card</option>
                <option value="KYC">KYC</option>
                <option value="Aadhar">Aadhar No.</option>
            </select>

            <br><br><label for="">Document/Identification Number <span>*</span></label>
            <input type="text" name="AddressProofNumber" id="" value=""required> 
            <br><br><label for="">Issued By <span>*</span></label>
            <input type="text" name="issuedBy" id="" value=""required> <br>
            
            
            <h4>4. Address Details <span>*</span></h4>
            <br><br><label for="#">Address Type <span>*</span> : </label>
            <select name="AddressType" id="">
                <option value="">Choose ....</option>
                <option value="Residential/Business"required>Residential/Business</option>
                <option value="Residential">Residential</option>
                <option value="Business">Business</option>
                <option value="RegisteredOffice">Registered Office</option>
                <option value="Overseas">Overseas (Mandatory for NRI/PIO)</option>
            </select>
            
            <br><br><label for="#">Address <span>*</span> : </label>
            <input type="text" class="add" name="Address" id="" value="">
            <br><br><label for="">City/Village : </label>
            <input type="text" name="City" id="" value="">
            <br><br><label for="#">District <span>*</span> : </label>
            <input type="text" name="District" id="" value="">
            <br><br><label for="#">State <span>*</span> : </label>
            <input type="text" name="State" id="" value="">
            <br><br><label for="#">Pin <span>*</span> : </label>
            <input type="text" name="Pin" id="" value="">
            <br><br><label for="#">Country : </label>
            <input type="text" name="Country" id="" value=""><br>
            
            <h4>5. Declaration Cum undertaking Cum Self-Certification</h4>
            <p><small>I have read the copy of <b><a href="#">Terms & Conditions</a></b> of the Account opening given to me. The <b>Terms & Conditions</b> have been explained ti me/us and having understood. I accept the same. <br>I hereby declare that I have submitted the Aadhar Card issued by UIDAI voluntarily for identification and/or address proof towards the compliance of KYC norms under the PMLA 2002. <br>I hereby consent that the bank may verify the same with the UIDAI and authorise the UIDAI expressly to release the identity and address through biometric authentication to the bank.</small></p>
            <br><br><label for="#">Applicant's photo <span>*</span></label>
            <input type="file" name="ApplicantPhoto" id="" value=""> 
            
            <br><br><label for="#">Applicant's Aadhar <span>*</span></label>
            <input type="file" name="ApplicantAadhar" id="" value=""> 

            <br><br><label for="#">Applicant's Signature/Thumb Impression <span>*</span></label>
            <input type="file" name="ApplicantSignature" id="" value="">
            
            <br><br><label for="#">Place <span>*</span> : </label>
            <input type="text" name="Place" id="" value="">
            
            <br><br><label for="#">Date <span>*</span> : </label>
            <input type="date" name="signDate" id="" value=""><br>
            
            <div class="btn-box">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</body>
</html>