<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/KYC-Form.css">
    <title>KYC Form</title>
</head>
<body> -->
@extends('layouts.main')
@section('mainSection')

    <h3>Know Your Customer (KYC) Application Form - For Individual</h3>
    <p> 
        <input type="radio" name="formType" id="">NEW
        <input type="radio" name="formType" id="">CHANGE REQUEST <small>(Please tick Choose the appropriate) </small>
    </p>
    <div class="customerDetailsFormContainer">
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>
            <div class="step-col"><small>Step 4</small></div>
        </div>
        <form action="" id="form1">
            <h4>1. Identity Details</h4>
            <div class="inputFields">
                
                <label for="prefix">Prefix<span>*</span> : </label>
                <input type="radio" name="prefix" id="" required>Mr.
                <input type="radio" name="prefix" id="">Mrs.
                <input type="radio" name="prefix" id="">Miss <br>
                
                <br><label for="#">Name of the Applicant <span>*</span> : </label>
                <div class="name">
                    <br><label for="firstName">First Name<span>*</span> : </label>
                    <input type="text" name="firstName" id="" autocomplete="off">
                    <br><label for="midName">Middle Name : </label>
                    <input type="text" name="midName" id="" autocomplete="off">
                    <br><label for="lastName">Last Name<span>*</span> : </label>
                    <input type="text" name="lastName" id="" autocomplete="off" required>
                </div>  
                
                <br><label for="fatherSpouse">Name of Father/Spouse<span>*</span> : </label>
                <input type="text" name="fatherSpouse" id="" required>
            
                
                <br><br><label for="Gender">Gender<span>*</span> : </label>
                <input type="radio" name="Gender" id="" required>Male
                <input type="radio" name="Gender" id="">Female 
                <input type="radio" name="Gender" id="">Third Gender
                
                &nbsp; &nbsp;<br><br><label for="">Date of Birth<span>*</span> : </label> 
                <input type="date" name="" id="" required>

                <br><br><label for="maritalStatus">Marital Status<span>*</span> : </label>
                <input type="radio" name="maritalStatus" id="" required>Married
                <input type="radio" name="maritalStatus" id="">Unmarried
                <input type="radio" name="maritalStatus" id="">Single
                <input type="radio" name="maritalStatus" id="">Divorced
                <input type="radio" name="maritalStatus" id="">Living Apart
                <input type="radio" name="maritalStatus" id="">Defacto
                
                
                <br><br><label for="nationality">Nationality<span>*</span> : </label>
                <input type="radio" name="nationality" required>Indian
                <input type="radio" name="nationality">Others 
                
                <label for="countryOther"><small>Country Name (If Others) : </small></label>
                <input type="text" name="countryOther">
                
                <br><br><label for="Residential">Residential Status <span>*</span> : </label>
                <input type="radio" name="Residential" id="" required>Resident Individual
                <input type="radio" name="Residential" id="">Non Resident Indian
                <input type="radio" name="Residential" id="">Foreign Indian
                <input type="radio" name="Residential" id="">Person of Indian Origin

                <br><br><label for="pan">PAN <span>*</span> : </label>
                <input type="text" name="pan" id="" required>

                <br><br><label for="UID">Unique Identification Number (UID)/ Aadhar, if any : </label>
                <input type="text" name="UID" id=""> 

                <br><br><label for="identityProof">Specify Proof of Identity Submitted <span>*</span> : </label>
                <input type="radio" name="identityProof" required>Pan
                <input type="radio" name="identityProof">Others 
                <label for="otherIdentityProof"><small>&nbsp;&nbsp;Please Specify (If Others) : </small></label>
                <input type="text" name="otherIdentityProof">

            </div>
            <div class="btn-box">
                <button type="button" id="next1">Next</button>
            </div>
        </form>


        <form action="" id="form2">
            <h4>2. Address Details</h4>
            
            <label for="corrAddress"><strong>a. Address for Correspondence</strong><span>*</span> : </label>
            <input type="text" name="corrAddress" id="" required>
            
            <label for="cityCorr">City/Town/Village <span>*</span> : </label>
            <input type="text" name="" id="cityCorr" required><br>

            <br><label for="pinCorr">Pin Code <span>*</span> : </label>
            <input type="number" name="pinCorr" id="" required>
            
            <label for="stateCorr">State <span>*</span> : </label>
            <input type="text" name="stateCorr" id="">

            <label for="countryCorr">Country <span>*</span> : </label>
            <input type="text" name="countryCorr" id="" required><br><br><br>

            <label for="poaCorrAddress"><strong>b. Specify the Proof of Address submitted for Correspondence Address <span>*</span></strong> : </label>
            <input type="text" name="poaCorrAddress" id="" required><br><br>
            
            <br><label for="#"><strong> c. Contact Details <span>*</span> : </strong></label>

            <label for="telOff">Tel.(Off.) : </label>
            <input type="number" name="telOff" id="">

            <label for="telRes">Tel.(Res.) : </label>
            <input type="number" name="telRes" id="">

            <label for="mobile">Mobile No. <span>*</span> : </label>
            <input type="number" name="mobile" id="" required><br>

            <br><label for="fax">Fax : </label>
            <input type="text" name="fax" id="">

            <label for="email">Email Id <span>*</span>:</label>
            <input type="text" name="email" id="" required><br><br>

            <br><label for="permanentAddress"><strong>d. Permanent Address </strong><small>(if different from above or overseas address, mandatory for Non-Resident Applicant) </small> :</label>
            <input type="text" name="permanentAddress" id="" required> <br>
            
            <br><label for="cityPermanent">City/Town/Village <span>*</span> : </label>
            <input type="text" name="cityPermanent" id="" required>

            <label for="pinPermanent">Pin Code <span>*</span> : </label>
            <input type="number" name="pinPermanent" id="" required><br>
            
            <br><label for="statePermanent">State <span>*</span> : </label>
            <input type="text" name="statePermanent" id="" required>

            <label for="countryPermanent">Country <span>*</span> : </label>
            <input type="text" name="countryPermanent" id="" required><br><br><br>

            <label for="poaPermanent"><strong>e. Specify the Proof of Address submitted for Permanent Address <span>*</span></strong> : </label>
            <input type="text" name="poaPermanent" id="" required>
            <div class="btn-box">
                <button type="button" id="back1">Back</button>
                <button type="button" id="next2">Next</button>
            </div>
        </form>

        <form action="" id="form3">
            <h4>3. Other Details<span>*</span></h4>
            
            <label for="annualIncome"><strong>a. Gross Annual Income Details <span>*</span></strong><small>(Please Specify) Income range per annum : </small></label>
            <input type="radio" name="annualIncome" id="" required>Below &#8377; 1 Lac
            <input type="radio" name="annualIncome" id="">&#8377; 1-5 Lac
            <input type="radio" name="annualIncome" id="">&#8377; 5-10 Lac
            <input type="radio" name="annualIncome" id="">&#8377; 10-25 Lac
            <input type="radio" name="annualIncome" id=""> More than &#8377; 25 Lacs <br><br>
            <p style="text-align: center;"><strong>OR</strong></p><br><br>

            <label for="#">Net-Worth (Net worth should not be older than 1 year) <strong>Amount &#8377; <input type="text" name="" id=""> as on (date) <input type="date" name="" id=""></strong></label><br>
            <br>
            <label for="occupation"><strong>b. Occupation <span>*</span></strong> <small></small>(Please select any one and give brief details) : </small></label>
            <input type="radio" name="occupation" id="" required>Private Sector
            <input type="radio" name="occupation" id="">Public Sector
            <input type="radio" name="occupation" id="">Governament Service 
            <input type="radio" name="occupation" id="">Business
            <input type="radio" name="occupation" id="">Professional
            <input type="radio" name="occupation" id="">Agriculturist
            <input type="radio" name="occupation" id="">Retired
            <input type="radio" name="occupation" id="">Housewife
            <input type="radio" name="occupation" id="">Student
            <input type="radio" name="occupation" id="">Others (Please Specify) <input type="text" name="occupation" id="">
            <br><br>

            <label for="politicalBackground"><strong>c. Please tick, if applicable : </strong></label>
            <input type="radio" name="politicalBackground" id="">Politically Exposed Person (PEP)
            <input type="radio" name="politicalBackground" id="">Related to Politically Exposed Person (PEP) <br><br>

            <label for="otherInformation"><strong>d. Any other Information : </strong></label>
            <input type="text" name="otherInformation" id="">
            <div class="btn-box">
                <button type="button"id="back2">Back</button>
                <button type="button" id="next3">Next</button>

            </div>
        </form>

        <form action="" id="form4">
            <h4>4. Declaration<span>*</span></h4>
            <p>I hereby declare that the details furnished above are true and correct to the best of my knowledge and brief and I undertake to inform you of any changes therein, Immediately. In case any of the above information is found to be false or untrue or misleading, I am aware that I may be held liable for it.</p><br><br>
            <label for="declareDate"><strong>Date <span>*</span> :</strong></label>
            <input type="date" name="declareDate" id="" required><br><br>

            <label for="photoApplicant"><strong>Applicant's Photo <span>*</span> : </strong></label>
            <input type="file" name="photoApplicant" id="" required><br><br>

            <label for="signatureApplicant"><strong>Applicant's Signature <span>*</span> :</strong></label>
            <input type="file" name="signatureApplicant" id="" required>

            <div class="btn-box">
                <button type="button"id="back3">Back</button>
                <button type="submit">Submit</button>

            </div>
        </form>
    </div>
    <script>
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

    </script>
@endsection


</body>
</html>