@extends('admin.home')
@section('title', 'Edit Manager')
@section('page-name')
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <input type="submit" name="" value="Login" /><br />
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="">
                    <div class="" id="" role="">
                        <h3 class="register-heading">Edit Manager Form</h3>
                        <div class="row register-form">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" required name="branchName">
                                            <option class="hidden" selected disabled>Branch Name *</option>
                                            <option value="Kolkata" {{$manager->branchName=='Kolkata'?'selected':''}}>Kolkata</option>
                                            <option value="Hooghly" {{$manager->branchName=='Hooghly'?'selected':''}}>Hooghly</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" required value="{{$manager->firstName}}" name="firstName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Middle Name " value="{{$manager->middleName}}" name="middleName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" required value="{{$manager->lastName}}" name="lastName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Father's Name *"
                                            required value="{{$manager->fatherName}}" name="fatherName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mother's Name *"
                                            required value="{{$manager->motherName}}" name="motherName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Id *" required value="{{$manager->email}}" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" 
                                            class="form-control" placeholder="Contact No *" required value="{{$manager->contact}}" name="contact" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" value="Male" required {{$manager->gender=='Male'?'checked':''}} name="gender">
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" value="Female" required {{$manager->gender=='Female'?'checked':''}} name="gender">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" required {{$manager->maritalStatus=='Married'?'checked':''}} name="maritalStatus" value="Married">
                                                <span> Married </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" required {{$manager->maritalStatus=='Unmarried'?'checked':''}} name="maritalStatus" value="Unmarried">
                                                <span>Unmarried </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" required {{$manager->maritalStatus=='Divorced'?'checked':''}} name="maritalStatus" value="Divorced">
                                                <span>Divorced </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" required name="qualification">
                                            <option class="hidden" selected disabled>Higher Qualification
                                            </option>
                                            <option value="Graduation" {{$manager->qualification=='Graduation'?'selected':''}}>Graduation</option>
                                            <option value="Post Graduation" {{$manager->qualification=='Post Graduation'?'selected':''}}>Post Graduation</option>
                                            <option value="Matriculation" {{$manager->qualification=='Matriculation'?'selected':''}}>Matriculation</option>
                                            <option value="Higher Secondary" {{$manager->qualification=='Higher Secondary'?'selected':''}}>Higher Secondary</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="DOB *" required value="{{$manager->dob}}" name="dob" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address *" required value="{{$manager->address}}" name="address" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State *" required value="{{$manager->state}}" name="state" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="06" maxlength="06" 
                                            class="form-control" placeholder="Pin Code *" required value="{{$manager->pincode}}" name="pincode" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" required name="category">
                                            <option class="hidden" selected disabled>Category</option>
                                            <option value="General" {{$manager->category=='General'?'selected':''}}>General</option>
                                            <option value="ST" {{$manager->category=='ST'?'selected':''}}>ST</option>
                                            <option value="SC" {{$manager->category=='SC'?'selected':''}}>SC</option>
                                            <option value="OBC" {{$manager->category=='OBC'?'selected':''}}>OBC</option>
                                            <option value="Other" {{$manager->category=='Others'?'selected':''}}>Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" required name="disability">
                                            <option class="hidden" selected disabled>Disability</option>
                                            <option value="Yes" {{$manager->disability=='Yes'?'selected':''}}>YES</option>
                                            <option value="No" {{$manager->disability=='No'?'selected':''}}>NO</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="12" maxlength="12" 
                                            class="form-control" placeholder="Aadhar Number *" required value="{{$manager->aadharNo}}" name="aadharNo" />
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
                                    <input type="text" class="form-control" placeholder="User Id *" required value="{{$manager->userid}}" name="userid" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="Password *" required value="{{$manager->password}}" name="password" />
                                    <input type="checkbox" name="" onclick="viewPasswordToggle()" style="cursor: pointer;"> Show Password
                                </div>
                                <input type="submit" class="btnRegister btn btn-primary" value="Update" name="editManager" />
                                {{-- <input type="reset" class="btnRegister btn btn-danger" /> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
