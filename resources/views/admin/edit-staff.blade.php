@extends('admin.home')
@section('title', 'Edit Staff')
@section('page-name')
    <main>
        <div class="staff-heading">
            <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
            <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1>
        </div>

        <div class="container register">
            <div class="row">
                <div class="col-md-12 register-right">
                    <div class="tab-content" id="">
                        <div class="" id="" role="">
                            <h3 class="register-heading">Edit Employee Detail</h3>
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" required  name="empType">
                                                <option class="hidden" selected disabled>Employee Type *</option>
                                                <option value="Full Time" {{$staff->empType=='Full Time'?'selected':''}}>Full Time</option>
                                                <option value="Part Time" {{$staff->empType=='Part Time'?'selected':''}}>Part Time</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" required name="branchName">
                                                <option class="hidden" selected disabled>Branch Name *</option>
                                                <option value="Kolkata" {{$staff->branchName=='Kolkata'?'selected':''}}>Kolkata</option>
                                                <option value="Hooghly" {{$staff->branchName=='Hooghly'?'selected':''}}>Hooghly</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" required name="designation">
                                                <option class="hidden" selected disabled>Designation *</option>
                                                <option value="Mr" {{$staff->designation=='Mr'?'selected':''}}>Mr</option>
                                                <option value="Mrs" {{$staff->designation=='Mrs'?'selected':''}}>Mrs</option>
                                                <option value="Miss" {{$staff->designation=='Miss'?'selected':''}}>Miss</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" required value="{{$staff->firstName}}" name="firstName" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Middle Name " value="{{$staff->middleName}}" name="middleName" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" required value="{{$staff->lastName}}" name="lastName" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="DOB *" required value="{{$staff->dob}}" name="dob" />
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Id *" required value="{{$staff->email}}" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" 
                                                class="form-control" placeholder="Contact No *" required value="{{$staff->contact}}" name="contact" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" value="Male" required {{$staff->gender=='Male'?'checked':''}} name="gender">
                                                    <span> Male </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" value="Female" required {{$staff->gender=='Female'?'checked':''}} name="gender">
                                                    <span>Female </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" required {{$staff->maritalStatus=='Married'?'checked':''}} name="maritalStatus" value="Married">
                                                    <span> Married </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" required {{$staff->maritalStatus=='Unmarried'?'checked':''}} name="maritalStatus" value="Unmarried">
                                                    <span>Unmarried </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" required {{$staff->maritalStatus=='Divorced'?'checked':''}} name="maritalStatus" value="Divorced">
                                                    <span>Divorced </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" required name="qualification">
                                                <option class="hidden" selected disabled>Higher Qualification
                                                </option>
                                                <option value="Graduation" {{$staff->qualification=='Graduation'?'selected':''}}>Graduation</option>
                                                <option value="Post Graduation" {{$staff->qualification=='Post Graduation'?'selected':''}}>Post Graduation</option>
                                                <option value="Matriculation" {{$staff->qualification=='Matriculation'?'selected':''}}>Matriculation</option>
                                                <option value="Higher Secondary" {{$staff->qualification=='Higher Secondary'?'selected':''}}>Higher Secondary</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" required name="category">
                                                <option class="hidden" selected disabled>Category</option>
                                                <option value="General" {{$staff->category=='General'?'selected':''}}>General</option>
                                                <option value="ST" {{$staff->category=='ST'?'selected':''}}>ST</option>
                                                <option value="SC" {{$staff->category=='SC'?'selected':''}}>SC</option>
                                                <option value="OBC" {{$staff->category=='OBC'?'selected':''}}>OBC</option>
                                                <option value="Other" {{$staff->category=='Others'?'selected':''}}>Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" required name="disability">
                                                <option class="hidden" selected disabled>Disability</option>
                                                <option value="Yes" {{$staff->disability=='Yes'?'selected':''}}>YES</option>
                                                <option value="No" {{$staff->disability=='No'?'selected':''}}>NO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Father's Name *"
                                                required value="{{$staff->fatherName}}" name="fatherName" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mother's Name *"
                                                required value="{{$staff->motherName}}" name="motherName" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Guardian's Name *"
                                                required value="{{$staff->guardianName}}" name="guardianName" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address *" required value="{{$staff->address}}" name="address" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City *" required value="{{$staff->city}}" name="city" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="District *" required value="{{$staff->district}}" name="district" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="State *" required value="{{$staff->state}}" name="state" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="06" maxlength="06" 
                                                class="form-control" placeholder="Pin Code *" required value="{{$staff->pincode}}" name="pincode" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="12" maxlength="12" 
                                                class="form-control" placeholder="Aadhar Number *" required value="{{$staff->aadharNo}}" name="aadharNo" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="12" maxlength="12" 
                                                class="form-control" placeholder="Pan Number *" required value="{{$staff->panNo}}" name="panNo" />
                                        </div>
                                        <div class="File"> <label>
                                                <h6>Upload Aadhar Card</h6>
                                            </label>
                                            <input type="file"
                                                accept="image/jpeg,image/jpg,image/png,image/webp"
                                                  name="aadharFile" />
                                        </div>
                                        <div class="File"> <label>
                                                <h6>Upload Pan Card</h6>
                                            </label>
                                            <input type="file"
                                                accept="image/jpeg,image/jpg,image/png,image/webp"
                                                  name="panFile" />
                                        </div>
                                        <div class="File"> <label>
                                                <h6>Upload Photo</h6>
                                            </label>
                                            <input type="file"
                                                accept="image/jpeg,image/jpg,image/png,image/webp"
                                                  name="photo" />
                                        </div>
                                        <div class="File"> <label>
                                                <h6>Upload Signature</h6>
                                            </label>
                                            <input type="file"
                                                accept="image/jpeg,image/jpg,image/png,image/webp"
                                                  name="signature" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Id *" required value="{{$staff->userid}}" name="userid" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password *" required value="{{$staff->password}}" name="password" />
                                            <input type="checkbox" name="" onclick="viewPasswordToggle()" style="cursor: pointer;"> Show Password
                                        </div>
                                        <input type="submit" class="btnRegister btn btn-primary" value="Update" name="editStaff" />
                                        {{-- <input type="reset" class="btnRegister btn btn-danger" /> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
