<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/customer/KYC-Form.css')}}">
    <title>Credit Card</title>
</head>
<body>
    <h1>
        <ul>
            <li><a href="{{url('/customer/')}}">Suraksha Bank</a></li>            
        </ul>
    </h1>
    <h3>Credit Card Application Form - For Individual</h3>

    <form action="" method="POST" id="">
        @csrf
        <h4> Details</h4>
        <div class="inputFields">
                
            <label for="prefix">Prefix<span>*</span> : </label>
            <input type="radio" name="prefix" id="" value="Mr." required>Mr.
            <input type="radio" name="prefix" id="" value="Mrs.">Mrs.
            <input type="radio" name="prefix" id="" value="Miss">Miss <br>
            
            <br><label for="#">Name of the Applicant <span>*</span> : </label>
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
                <select name="MaritualStatus" id="">
                    <option value="" selected>Choose....</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Single">Single</option>
                    <option value="Divorced">Divorced</option>
                </select>
                
                
                <br><br><label for="#">Nationality<span>*</span> : </label>
                <select name="nationality" id="">
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
            
            <div class="btn-box">
                <button type="submit">Submit</button>

            </div>
        </div>
    </form>
</body>
</html>