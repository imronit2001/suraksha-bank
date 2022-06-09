<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/customer/KYC-Form.css')}}">
    <title>KYC Form</title>
</head>
<body>
    <h1>
        <ul>
            <li><a href="{{url('/Customer/')}}">Suraksha Bank</a></li>            
        </ul>
    </h1>

    <h3>Know Your Customer (KYC) Application Form - For Individual</h3>
    <p> 
        <input type="radio" name="formType" id="">NEW
        <input type="radio" name="formType" id="">CHANGE REQUEST <small>(Please tick Choose the appropriate) </small>
    </p>
    <div class="customerDetailsFormContainer">
        <!-- <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>
            <div class="step-col"><small>Step 4</small></div>
        </div> -->
        <form action="" method="POST" id="form1">
            @csrf
            <h4>1. Identity Details</h4>
            <div class="inputFields">
                
                <label for="prefix">Prefix<span>*</span> : </label>
                <input type="radio" name="prefix" id="" value="Mr." required>Mr.
                <input type="radio" name="prefix" id="" value="Mrs.">Mrs.
                <input type="radio" name="prefix" id="" value="Miss">Miss <br>
                
                <br><label for="#">Name of the Applicant <span>*</span> : </label>
                <div class="name">
                    <br><label for="FirstName">First Name<span>*</span> : </label>
                    <input type="text" name="FirstName" id="" value="" autocomplete="off">
                    <br><label for="MidName">Middle Name : </label>
                    <input type="text" name="MidName" id="" value="" autocomplete="off">
                    <br><label for="LastName">Last Name<span>*</span> : </label>
                    <input type="text" name="LastName" id="" value="" autocomplete="off" required>
                </div>  
                
                <br><label for="fatherSpouse">Name of Father/Spouse<span>*</span> : </label>
                <input type="text" name="fatherSpouse" id="" required>
            
                
                <br><br><label for="Gender">Gender<span>*</span> : </label>
                <input type="radio" name="gender" id="" value="Male" required>Male
                <input type="radio" name="gender" id="" value="Female">Female 
                <input type="radio" name="gender" id="" value="ThirdGender">Third Gender
                
                &nbsp; &nbsp;<br><br><label for="">Date of Birth<span>*</span> : </label> 
                <input type="date" name="" id="" required>

                <br><br><label for="maritalStatus">Marital Status<span>*</span> : </label>
                <input type="radio" name="MaritalStatus" id="" value="Married" required>Married
                <input type="radio" name="MaritalStatus" id="" value="Unmarried">Unmarried
                <input type="radio" name="MaritalStatus" id="" value="Single">Single
                <input type="radio" name="MaritalStatus" id="" value="Divorced">Divorced
                <input type="radio" name="MaritalStatus" id="" value="LivingApart">Living Apart
                <input type="radio" name="MaritalStatus" id="" value="Defacto">Defacto
                
                
                <br><br><label for="nationality">Nationality<span>*</span> : </label>
                <input type="radio" name="Nationality" value="Indian" required>Indian
                <input type="radio" name="Nationality" value="Others">Others 
                
                <!-- <label for="countryOther"><small>Country Name (If Others) : </small></label>
                <input type="text" name="countryOther"> -->
                
                <br><br><label for="Residential">Residential Status <span>*</span> : </label>
                <input type="radio" name="ResidentialStatus" id="" value="Resident Individual" required>Resident Individual
                <input type="radio" name="ResidentialStatus" id="" value="Non resident Indian">Non Resident Indian
                <input type="radio" name="ResidentialStatus" id="" value="Foreign Indian">Foreign Indian
                <input type="radio" name="ResidentialStatus" id="" value="Indian Origin">Person of Indian Origin

                <br><br><label for="pan">PAN <span>*</span> : </label>
                <input type="text" name="PanNumber" id="" required>

                <br><br><label for="UID">Unique Identification Number (UID)/ Aadhar, if any : </label>
                <input type="text" name="AadharNumber" id=""> 

                <br><br><label for="identityProof">Specify Proof of Identity Submitted <span>*</span> : </label>
                <input type="radio" name="ProofOfIdentity" value="Pan" required>Pan
                <input type="radio" name="ProofOfIdentity" value="Other">Others 
                <!-- <label for="otherIdentityProof"><small>&nbsp;&nbsp;Please Specify (If Others) : </small></label>
                <input type="text" name="otherIdentityProof"> -->

            </div>


            <h4>2. Address Details</h4>
            <label for="corrAddress"><strong>a. Address for Correspondence</strong><span>*</span> : </label>
            <input type="text" name="CorrespondenceAddress" id="" required>
            
            <label for="cityCorr">City/Town/Village <span>*</span> : </label>
            <input type="text" name="City" id="" required><br>

            <br><label for="pinCorr">Pin Code <span>*</span> : </label>
            <input type="number" name="Pin" id="" required>
            
            <label for="stateCorr">State <span>*</span> : </label>
            <input type="text" name="State" id="">

            <label for="countryCorr">Country <span>*</span> : </label>
            <input type="text" name="Country" id="" required><br><br><br>

            <label for="poaCorrAddress"><strong>b. Specify the Proof of Address submitted for Correspondence Address <span>*</span></strong> : </label>
            <input type="text" name="Mobile" id="" required><br><br>
            
            <br><label for="#"><strong> c. Contact Details <span>*</span> : </strong></label>

            <label for="mobile">Mobile No. <span>*</span> : </label>
            <input type="number" name="Mbile" id="" required><br>
            <label for="telOff">Telephone : </label>
            <input type="number" name="Telephone" id="">

            <br><label for="permanentAddress"><strong>d. Permanent Address </strong><small>(if different from above or overseas address, mandatory for Non-Resident Applicant) </small> :</label>
            <input type="text" name="PermanentAddress" id="" required> <br>
            
            <br><label for="cityPermanent">City/Town/Village <span>*</span> : </label>
            <input type="text" name="PermanentCity" id="" required>

            <label for="pinPermanent">Pin Code <span>*</span> : </label>
            <input type="number" name="PermanentPin" id="" required><br>
            
            <br><label for="statePermanent">State <span>*</span> : </label>
            <input type="text" name="PermanentState" id="" required>

            <label for="countryPermanent">Country <span>*</span> : </label>
            <input type="text" name="PermanentCountry" id="" required><br><br><br>

            <label for="poaPermanent"><strong>e. Specify the Proof of Address submitted for Permanent Address <span>*</span></strong> : </label>
            <input type="text" name="AddressProofNumber" id="" required>

            <h4>3. Other Details<span>*</span></h4>
            
            <label for="AnnualIncome"><strong>a. Gross Annual Income Details <span>*</span></strong><small>(Please Specify) Income range per annum : </small></label>
            <input type="radio" name="AnnualIncome" id="" value="1Lac" required>Below &#8377; 1 Lac
            <input type="radio" name="AnnualIncome" id="" value="1-5Lac">&#8377; 1-5 Lac
            <input type="radio" name="AnnualIncome" id="" value="5-10Lac">&#8377; 5-10 Lac
            <input type="radio" name="AnnualIncome" id="" value="10-25Lac">&#8377; 10-25 Lac
            <input type="radio" name="AnnualIncome" id="" value="25Lac+"> More than &#8377; 25 Lacs <br><br>
            <p style="text-align: center;"><strong>OR</strong></p><br><br>

            <label for="#">Net-Worth (Net worth should not be older than 1 year) <strong>Amount &#8377; <input type="text" name="NetWorth" id=""> as on (date) <input type="date" name="Date" id=""></strong></label><br>
            <br>
            <label for="OccupationType"><strong>b. Occupation <span>*</span></strong> <small></small>(Please select any one and give brief details) : </small></label>
            <input type="radio" name="OccupationType" id="" value="PrivateSector" required>Private Sector
            <input type="radio" name="OccupationType" id="" value="PublicSector">Public Sector
            <input type="radio" name="OccupationType" id="" value="GovernamentSector">Governament Service 
            <input type="radio" name="OccupationType" id="" value="Business">Business
            <input type="radio" name="OccupationType" id="" value="Professional">Professional
            <input type="radio" name="OccupationType" id="" value="Agriculturist">Agriculturist
            <input type="radio" name="OccupationType" id="" value="Retired">Retired
            <input type="radio" name="OccupationType" id="" value="Housewife">Housewife
            <input type="radio" name="OccupationType" id="" value="Student">Student
            <h4>4. Declaration<span>*</span></h4>
            <p>I hereby declare that the details furnished above are true and correct to the best of my knowledge and brief and I undertake to inform you of any changes therein, Immediately. In case any of the above information is found to be false or untrue or misleading, I am aware that I may be held liable for it.</p><br><br>
            <label for="declareDate"><strong>Date <span>*</span> :</strong></label>
            <input type="date" name="Date" id="" required><br><br>

            <label for="photoApplicant"><strong>Applicant's Photo <span>*</span> : </strong></label>
            <input type="file" name="ApplicantPhoto" id="" required><br><br>

            <label for="signatureApplicant"><strong>Applicant's Signature <span>*</span> :</strong></label>
            <input type="file" name="ApplicantSignature" id="" required>

            <div class="btn-box">
                <button type="button"id="back3">Back</button>
                <button type="submit">Submit</button>

            </div>
        </form>
    </div>
    <!-- <script>
        var form1 = document.getElementById('form1');
        var form2 = document.getElementById('form2');
        var form3 = document.getElementById('form3');
        var form4 = document.getElementById('form4');
  
        var next1 = document.getElementById('next1');
        var next2 = document.getElementById('next2');
        var next3 = document.getElementById('next3');

        var back1 = document.getElementById('back1');
        var back2 = document.getElementById('back2');
        var back3 = document.getElementById('back3');

        var progress = document.getElementById('progress');


        next1.onclick = function(){
            form1.style.left = "-100%";
            form2.style.left = "0%";
            progress.style.width = "50%";
        }
        next2.onclick = function(){
            form2.style.left = "-100%";
            form3.style.left = "0%";
            progress.style.width = "75%";
        }
        next3.onclick = function(){
            form3.style.left = "-100%";
            form4.style.left = "0%";
            progress.style.width = "100%";
        }


        back1.onclick = function(){
            form1.style.left = "0%";
            form2.style.left = "-100%";
            progress.style.width = "25%";
        }
        back2.onclick = function(){
            form2.style.left = "0%";
            form3.style.left = "-100%";
            progress.style.width = "50%";
        }
        back3.onclick = function(){
            form3.style.left = "0%";
            form4.style.left = "-100%";
            progress.style.width = "75%";
        }

    </script> -->



</body>
</html>