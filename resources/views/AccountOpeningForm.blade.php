<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/AccountOpening.css')}}">
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
    <div class="customerDetailsFormContainer">
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>
            <div class="step-col"><small>Step 4</small></div>
            <div class="step-col"><small>Step 5</small></div>
        </div>
        <form action="" id="form1">
            <h4>1. Personal Details</h4>
            <div class="inputFields">
                <label for="#">Prefix<span>*</span> : </label>
                <input type="radio" name="prefix" id="" required>Mr.
                <input type="radio" name="prefix" id="">Mrs.
                <input type="radio" name="prefix" id="">Miss <br><br>
                <div class="name">
                    <br><label for="#">First Name<span>*</span> : </label>
                    <input type="text" name="" id="" autocomplete="off">
                    <br><label for="#">Middle Name : </label>
                    <input type="text" name="" id="" autocomplete="off">
                    <br><label for="#">Last Name<span>*</span> : </label>
                    <input type="text" name="" id="" autocomplete="off" required>
                </div>  
                <br><label for="#">Date of Birth<span>*</span> : </label> 
                <input type="date" name="" id="" required>
                <label for="#">Gender<span>*</span> : </label>
                <input type="radio" name="Gender" id="" required>Male
                <input type="radio" name="Gender" id="">Female 
                <input type="radio" name="Gender" id="">Third Gender<br>
                <br><label for="#">Marital Status<span>*</span> : </label>
                <input type="radio" name="maritalStatus" id="" required>Married
                <input type="radio" name="maritalStatus" id="">Unmarried
                <input type="radio" name="maritalStatus" id="">Single
                <input type="radio" name="maritalStatus" id="">Divorced
                <input type="radio" name="maritalStatus" id="">Living Apart
                <input type="radio" name="maritalStatus" id="">Defacto <br>
                <br><label for="#">Name of Father<span>*</span> : </label>
                <input type="text" name="" id="" required>
                <label for="#">Name of Mother<span>*</span> : </label>
                <input type="text" name="" id="" required><br>
                <br><label for="#">Name of Spouse <small>(If Married)</small> <span>*</span> : </label>
                <input type="text" name="" id="">
                <label for="#">No. of Dependents : </label>
                <input type="number"><br>
                <br><label for="#">Illiterate : </label>
                <input type="radio" name="Illiterate" id="">Yes
                <input type="radio" name="Illiterate" id="">No 
                &nbsp;&nbsp;&nbsp;&nbsp;<label for="#">If yes : Identification Marks</label>
                <input type="text"> <br>
                <div class="guardian">
                    <br><label for="#">Name of Guardian <span>(In case of Minor)</span> : </label>
                    <input type="text" name="" id=""><br>
                    <br><label for=""> <small>Realtionship with Guardian : </small></label>
                    <input type="text">
                    <label for="#"><small>Cust ID of Guardian/Assignee/Authorised Representative : </small></label>
                    <input type="text">
                </div>
                <br><label for="#">Nationality<span>*</span> : </label>
                <input type="radio">Indian
                <input type="radio">Others 
                <label for="#"><small>Country Name (If Others) : </small></label>
                <input type="text"><br>
                <br><label for="#">Residential Status : </label>
                <input type="radio" name="Residential" id="">Resident Individual
                <input type="radio" name="Residential" id="">Non Resident Indian
                <input type="radio" name="Residential" id="">Foreign Indian
                <input type="radio" name="Residential" id="">Person of Indian Origin <br>
                <br><label for="#">Occupation Type<span>*</span> : </label><br>
                <input type="radio" name="occupation" id="" required>Service
                <input type="radio" name="occupation" id="">Private Sector
                <input type="radio" name="occupation" id="">Public Sector
                <input type="radio" name="occupation" id="">Governament Sector
                <input type="radio" name="occupation" id="">Student
                <input type="radio" name="occupation" id="">Professional
                <input type="radio" name="occupation" id="">Self Employed
                <input type="radio" name="occupation" id="">Retired
                <input type="radio" name="occupation" id="">Housewife
                <input type="radio" name="occupation" id="">Others <br>
                <br><label for="#">Goveranament Sector : </label><br>
                <input type="radio" name="govtSector" id="">State
                <input type="radio" name="govtSector" id="">Central
                <input type="radio" name="govtSector" id="">Defence
                <input type="radio" name="govtSector" id="">Railway
                <input type="radio" name="govtSector" id="">Others <br>
                <br><label for="#">Business : </label><br>
                <input type="radio" name="business" id="">Trader
                <input type="radio" name="business" id="">Jeweller
                <input type="radio" name="business" id="">Service Provider
                <input type="radio" name="business" id="">Agriculture
                <input type="radio" name="business" id="">Stoke Broker
                <input type="radio" name="business" id="">Real Estate
                <input type="radio" name="business" id="">Arms Dealer
                <input type="radio" name="business" id="">Manufacturing
                <input type="radio" name="business" id="">Others, Please Specify <br>
                <br><label for="#">Oraganisation's Name : </label>
                <input type="text" name="" id="">
                <label for="#">Designation/Profession</label>
                <input type="text" name="" id=""> <br>
                <br><label for="#">Nature of Business : </label>
                <input type="text" name="" id="">
                <label for="#">Annual Income(Rs.)<span>*</span> : </label>
                <input type="number" name="" id="" required>
                <label for="#">Annual Turnover(Rs.)<span>*</span> : </label>
                <input type="number" name="" id="" required><br>
                <br><label for="#">Net Worth <small>(approx value)</small>(Rs.) : </label>
                <input type="number" name="" id=""><br>
                <br><label for="#">Religion<span>*</span> : </label>
                <input type="radio" name="religion" id="" required>Hindu
                <input type="radio" name="religion" id="">Muslim
                <input type="radio" name="religion" id="">Sikh
                <input type="radio" name="religion" id="">Christian
                <input type="radio" name="religion" id="">Others
                <input type="text" name="religion" id=""><br>
                <br><label for="#">Category<span>*</span> : </label>
                <input type="radio" name="category" id="" required>General
                <input type="radio" name="category" id="">OBC
                <input type="radio" name="category" id="">SC
                <input type="radio" name="category" id="">ST
                <input type="radio" name="category" id="">Minority <br>
                <br><label for="#">Customer Type/Status<span>*</span> : </label><br>
                <input type="radio" name="customerType" id="">Sr. Citizen
                <input type="radio" name="customerType" id="">Staff PF No. <input type="text" name="customerType" id="">
                <input type="radio" name="customerType" id="">Pardanashin
                <input type="radio" name="customerType" id="">Minor
                <input type="radio" name="customerType" id="">NRI
                <input type="radio" name="customerType" id="">Pensioner
                <input type="radio" name="customerType" id="">General
                <input type="radio" name="customerType" id="">Illitrate
                <input type="radio" name="customerType" id="">Ex Staff PF No. <input type="text" name="customerType" id=""> <br>
                <br><label for="#">Person with Disability<span>*</span> : </label>
                <input type="radio" name="disability" id="">Yes
                <input type="radio" name="disability" id="">No
                <label for="#"><Small>If Yes</Small></label>
                <input type="checkbox" name="disabilityClassification" id="">Visually Impaired
                <input type="checkbox" name="disabilityClassification" id="">Differently Abled <br>
                <br><label for="#">Educational Qualification<span>*</span> : </label>
                <input type="radio" name="qualification" id="" required>Below SSC
                <input type="radio" name="qualification" id="">SSC
                <input type="radio" name="qualification" id="">HSC
                <input type="radio" name="qualification" id="">Graduate
                <input type="radio" name="qualification" id="">Post Graduate
                <input type="radio" name="qualification" id="">Professional
                <input type="radio" name="qualification" id="">Others <br>
                <br><label for="#">Please tick the appropriate box<span>*</span> : </label>
                <input type="radio" name="political" id="" required> Politically exposed Person 
                <input type="radio" name="political" id=""> Related to politically exposed person
                <input type="radio" name="political" id=""> None
                <br>
                <p><small><br>(Politically Exposed persons are individuals who are or have been entrusted with prominent public functions in a foreign country e.g. Heads of State/ Governaments, Senior Politicians / Senior Governaments / Judicials / Military Officers, Senior Executives of State-Owned Corporations, important Political Party Officials, etc.)</small></p>
                <p><small><br> ISO 3166 Country Code of Jurisdiction of Residence <span>*</span> <input type="text" name="" id="">(Code for india is IN) <input type="text" name="" id=""> Citizenship <input type="text" name="" id=""></small></p>
                <br>
                <label for="#">Country of Tax Residence in India only and not in any other country or territory outside India <span>*</span> : </label>
                <input type="radio" name="tax" id="">Yes
                <input type="radio" name="tax" id="">No <small>(if No, please fill the FATCA details form-Annexure II)</small>
                <br>
                <label for="#"><strong><br>PAN/Tax Identification Number or equivalent <small> (if issued by Jurisdiction)</small> </strong> : </strong></label>
                <input type="text" name="" id=""> <small>(If PAN not submitted, submit form 60-Annexue II)</small>

            </div>
            <div class="btn-box">
                <button type="button" id="next1">Next</button>
            </div>
        </form>


        <form action="" id="form2">
            <h4>2. Contact Details</h4>
            <label for="#">Mobile No.<span>*</span> : </label>
            <input type="number" name="" id="" required>
            <br><label for="#">Alternative Mobile No. : </label>
            <input type="number" name="" id=""><br>
            <br><label for="#">Email ID <span>*</span> : </label>
            <input type="email" name="" id="" required>
            <br><label for="#">Alternative Email ID : </label>
            <input type="email" name="" id=""><br>
            <br><label for="">Tel(Off.) : </label>
            <input type="number" name="" id="">
            <br><label for="">Tel(Res.) : </label>
            <input type="number" name="" id="">
            <div class="btn-box">
                <button type="button" id="back1">Back</button>
                <button type="button" id="next2">Next</button>
            </div>
        </form>

        <form action="" id="form3">
            <h4>3. Proof of Identity/Address <small>(Please choose the appropriate Box (any one ID type) and give details) </small><span>*</span></h4>
            <input type="radio" name="identityProof" id="" required>A-Passport <small>(Mandatory in case of NRI/PIO)</small>
            <input type="radio" name="identityProof" id="">B-Voter's Identity Card
            <input type="radio" name="identityProof" id="">C-Driving Licence
            <input type="radio" name="identityProof" id="">D-NREGA Job Card <br>
            <br><input type="radio" name="identityProof" id="">E-<small>Letter issued by National Population Register containing details of Name & Address</small>
            <input type="radio" name="identityProof" id="">F-Proof of Possession of Aadhar No.
            <input type="radio" name="identityProof" id="">E-KYC
            <input type="radio" name="identityProof" id="">Offline Verification <br>
            <br><label for="">Document/Identification Number <span>*</span></label>
            <input type="text" name="" id=""required> <br>
            <br><label for="">Issued By <span>*</span></label>
            <input type="text" name="" id=""required> <br>
            <br><label for="">Issue Date <span>*</span></label>
            <input type="date" name="" id="" required> <br>
            <br><label for="">Expiry Date <small>(If Applicable)</small></label>
            <input type="date" name="" id="">
            <div class="btn-box">
                <button type="button"id="back2">Back</button>
                <button type="button" id="next3">Next</button>

            </div>
        </form>

        <form action="" id="form4">
            <h4>4. Address Details <span>*</span> <small> (as per Proof of Address submitted at step 3.)</small></h4>
            <label for="#">Address Type <span>*</span> : </label>
            <input type="radio" name="addressType" id=""required>Residential/Business
            <input type="radio" name="addressType" id="">Residential
            <input type="radio" name="addressType" id="">Business
            <input type="radio" name="addressType" id="">Registered Office
            <input type="radio" name="addressType" id="">Overseas <small>mandatory for NRI/PIO)</small> <br>

            <br><label for="#">Address <span>*</span> : </label>
            <input type="text" class="add" name="" id=""><br>
            <br><label for="">City/Village : </label>
            <input type="text" name="" id="">
            <label for="#">District <span>*</span> : </label>
            <input type="text" name="" id=""><br>
            <br><label for="#">State <span>*</span> : </label>
            <input type="text" name="" id="">
            <label for="#">Pin <span>*</span> : </label>
            <input type="number" name="" id="">
            <label for="#">Country : </label>
            <input type="text" name="" id=""><br>
            <br><p>Is the address provided  above Current Address ? <span>*</span> <input type="radio" name="currAddress" id="">Yes<input type="radio" name="currAddress" id="">No <small> If selected 'No', then please provide Current Address at Step 5 along with Documentary Evidence as per Step 6). </small></p>

            <h4>5. Address Details <small>
                <input type="radio" name="address" id="">Current
                <input type="radio" name="address" id="">Correspondance
                <input type="radio" name="address" id="">Permanent
                <input type="radio" name="address" id="">Same as Step 4.</small>
            </h4>
            <label for="#">Address Type <span>*</span> : </label>
            <input type="radio" name="addressType" id=""required>Residential/Business
            <input type="radio" name="addressType" id="">Residential
            <input type="radio" name="addressType" id="">Business
            <input type="radio" name="addressType" id="">Registered Office
            <input type="radio" name="addressType" id="">Unspecified <br>

            <br><label for="#">Address <span>*</span> : </label>
            <input type="text" class="add" name="" id=""><br>
            <br><label for="">City/Village : </label>
            <input type="text" name="" id="">
            <label for="#">District <span>*</span> : </label>
            <input type="text" name="" id=""><br>
            <br><label for="#">State <span>*</span> : </label>
            <input type="text" name="" id="">
            <label for="#">Pin <span>*</span> : </label>
            <input type="number" name="" id="">
            <label for="#">Country : </label>
            <input type="text" name="" id="">

            <h4>6. <small>If the Proof of Address/OVD provided does not contain current address, please provide any of the documents below as OVD (Officially Valid Document)</small></h4>
            
            <input type="radio" name="POA" id="">Utility Bill
            <input type="radio" name="POA" id="">PPO/FPPO
            <input type="radio" name="POA" id="">Property or Municipal Tax Receipt <br>
            <br><input type="radio" name="POA" id=""><small>Letter of allotment of accomodation issued by employer/ isuued by State or Central Governament departments, statuory or regulatory bodies, Public Sector undertaking, schedeled commercial banks, financial instituitions and listed companies. Similarly, leave and licence aggrements with such employers alloting official accomodation.</small> <br>
            <br><input type="radio" name="POA" id=""><small>Self-Declaration ( applicable only when customer has carried out e-KYC (AADHAR authentication) and adress in AADHAR is not same as Current Address)</small><br>
            <br><label for="#">Document No. : </label>
            <input type="text" name="" id="">
            <label for="#">Date : </label>
            <input type="date" name="" id=""><br>
            <p><small>I/We shall submit OVD with updated Current Address within a period of three months, falling which bank may restrict the operations in the account.</small></p>

            <div class="btn-box">
                <button type="button"id="back3">Back</button>
                <button type="button" id="next4">Next</button>

            </div>
        </form>
        <form action="" id="form5">
            <h4>7. Declaration Cum undertaking Cum Self-Certification</h4>
            <p><small>I have read the copy of <b><a href="#">Terms & Conditions</a></b> of the Account opening given to me. The <b>Terms & Conditions</b> have been explained ti me/us and having understood. I accept the same. <br>I hereby declare that I have submitted the Aadhar Card issued by UIDAI voluntarily for identification and/or address proof towards the compliance of KYC norms under the PMLA 2002. <br>I hereby consent that the bank may verify the same with the UIDAI and authorise the UIDAI expressly to release the identity and address through biometric authentication to the bank.</small></p>
            
            
            <br><input type="radio" name="KYC" id="">Yes<input type="radio" name="KYC" id="">No    <small>(e-KYC authentication and aadhar seeding is mandatory for availing DBT benefit.)</small> <br>
            <br><label for="#">Applicant's photo <span>*</span></label>
            <input type="file" name="photo" id=""> <br>
            <br><label for="#">Applicant's Signature/Thumb Impression <span>*</span></label>
            <input type="file" name="sign" id=""><br>

            <br><label for="#">Place <span>*</span> : </label>
            <input type="text" name="place" id=""><br>

            <br><label for="#">Date <span>*</span> : </label>
            <input type="date" name="" id=""><br>

            <div class="btn-box">
                <button type="button"id="back4">Back</button>
                <button type="submit">Submit</button>

            </div>
        </form>
    </div>
    <script>
        var form1 = document.getElementById('form1');
        var form2 = document.getElementById('form2');
        var form3 = document.getElementById('form3');
        var form4 = document.getElementById('form4');
        var form5 = document.getElementById('form5');
  
        var next1 = document.getElementById('next1');
        var next2 = document.getElementById('next2');
        var next3 = document.getElementById('next3');
        var next4 = document.getElementById('next4');

        var back1 = document.getElementById('back1');
        var back2 = document.getElementById('back2');
        var back3 = document.getElementById('back3');
        var back4 = document.getElementById('back4');

        var progress = document.getElementById('progress');


        next1.onclick = function(){
            form1.style.left = "-100%";
            form2.style.left = "0%";
            progress.style.width = "40%";
        }
        next2.onclick = function(){
            form2.style.left = "-100%";
            form3.style.left = "0%";
            progress.style.width = "60%";
        }
        next3.onclick = function(){
            form3.style.left = "-100%";
            form4.style.left = "0%";
            progress.style.width = "80%";
        }
        next4.onclick = function(){
            form4.style.left = "-100%";
            form5.style.left = "0%";
            progress.style.width = "100%";
        }

        back1.onclick = function(){
            form1.style.left = "0%";
            form2.style.left = "-100%";
            progress.style.width = "20%";
        }
        back2.onclick = function(){
            form2.style.left = "0%";
            form3.style.left = "-100%";
            progress.style.width = "40%";
        }
        back3.onclick = function(){
            form3.style.left = "0%";
            form4.style.left = "-100%";
            progress.style.width = "60%";
        }
        back4.onclick = function(){
            form4.style.left = "0%";
            form5.style.left = "-100%";
            progress.style.width = "80%";
        }
    </script>
</body>
</html>