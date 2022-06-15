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
            <li><a href="{{url('/customer/')}}">Suraksha Bank</a></li>
        </ul>
    </h1>

    <h3>Know Your Customer (KYC) Application Form - For Individual</h3>

    <div class="customerDetailsFormContainer">
        <form action="" method="POST" >
            @csrf
            <p>
                <input type="radio" name="formType" value="New" id="">NEW
                <input type="radio" name="formType" value="Change Request" id="">CHANGE REQUEST <small>(Please tick Choose the appropriate) </small>
            </p>
            <h4>1. Identity Details</h4>
            <div class="inputFields">

                <label for="prefix">Prefix<span>*</span> : </label>
                <input type="radio" name="prefix" id="" value="Mr." required>Mr.
                <input type="radio" name="prefix" id="" value="Mrs.">Mrs.
                <input type="radio" name="prefix" id="" value="Miss">Miss <br>

                <div class="name">
                    <br><label for="FirstName">First Name<span>*</span> : </label>
                    <input type="text" name="FullName" id="" value="" autocomplete="off">
                </div>

                <br><label for="fatherSpouse">Name of Father<span>*</span> : </label>
                <input type="text" name="FatherName" id="" required>


                <br><br><label for="Gender">Gender<span>*</span> : </label>
                <input type="radio" name="gender" id="" value="Male" required>Male
                <input type="radio" name="gender" id="" value="Female">Female
                <input type="radio" name="gender" id="" value="ThirdGender">Third Gender

                &nbsp; &nbsp;<br><br><label for="">Date of Birth<span>*</span> : </label>
                <input type="date" name="dob" id="" required>

                <br><br><label for="#">Marital Status<span>*</span> : </label>
                <select name="MaritalStatus" id="">
                    <option value="" selected>Choose....</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Single">Single</option>
                    <option value="Divorced">Divorced</option>
                </select>


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

                <br><br><label for="pan">PAN <span>*</span> : </label>
                <input type="text" name="PanNumber" id="" required>

                <br><br><label for="UID">Unique Identification Number (UID)/ Aadhar : </label>
                <input type="text" name="AadharNumber" id="">


            </div>


            <h4>2. Address Details</h4>
            <br><br><label for=""><strong>A. Address</strong><span>*</span> : </label>
            <input type="text" name="Address" id="" required>

            <br><br><label for="">City/Town/Village <span>*</span> : </label>
            <input type="text" name="City" id="" required>

            <br><br><label for="">Pin Code <span>*</span> : </label>
            <input type="text" name="Pin" id="" required>

            <br><br><label for="">State <span>*</span> : </label>
            <input type="text" name="State" id="">

            <br><br><label for="">Country <span>*</span> : </label>
            <input type="text" name="Country" id="" required>

            <br><br><label for="#"><strong> B. Contact Details <span>*</span> : </strong></label>

            <br><br><label for="">Mobile No. <span>*</span> : </label>
            <input type="text" name="Mobile" id="" required>
            <br><br><label for="telOff">Telephone : </label>
            <input type="text" name="Telephone" id="">


            <br><br><label for="poaPermanent"><strong>C. Specify the Proof of Address submitted for Permanent Address <span>*</span></strong> : </label>
            <input type="text" name="AddressProofNumber" id="" required>

            <h4>3. Declaration<span>*</span></h4>
            <p>I hereby declare that the details furnished above are true and correct to the best of my knowledge and brief and I undertake to inform you of any changes therein, Immediately. In case any of the above information is found to be false or untrue or misleading, I am aware that I may be held liable for it.</p><br><br>
            <label for="declareDate"><strong>Date <span>*</span> :</strong></label>
            <input type="date" name="Date" id="" required>

            <br><br><label for="photoApplicant"><strong>Applicant's Photo <span>*</span> : </strong></label>
            <input type="file" name="ApplicantPhoto" id="" required><br><br>

            <label for="signatureApplicant"><strong>Applicant's Signature <span>*</span> :</strong></label>
            <input type="file" name="ApplicantSignature" id="" required>

            <label for="signatureApplicant"><strong>Applicant's Aadhar <span>*</span> :</strong></label>
            <input type="file" name="ApplicantAadhar" id="" required>

            <label for="signatureApplicant"><strong>Applicant's Pan <span>*</span> :</strong></label>
            <input type="file" name="ApplicantPan" id="" required>

            <div class="btn-box">
                <button type="submit">Submit</button>

            </div>
        </form>
    </div>
</body>
</html>
