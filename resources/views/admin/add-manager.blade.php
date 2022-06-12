@extends('admin.home')
@section('title', 'Add Manager')
@section('page-name')
    <main>
        <div class="staff-heading">
            <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
            <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1>
        </div>

        <div class="container bg-transparent p-5">
            <h1 class="w-75 m-auto text-center blockquote">Add Manager Form</h1>
            <form action="" method="POST" class="w-75 m-auto">
                @csrf
                <div class="form-floating m-3 ">
                    <input type="text" class="form-control bg-transparent" name="fullName" id="fullName" required
                        placeholder="name@example.com">
                    <label for="fullName">Full Name</label>
                </div>
                <div class="form-floating m-3 ">
                    <input type="email" class="form-control bg-transparent" name="email" id="email" required
                        placeholder="Password">
                    <label for="email">Email Id</label>
                </div>
                <div class="form-floating m-3 ">
                    <input type="tel" class="form-control bg-transparent" name="mobile" id="mobile" required
                        placeholder="name@example.com">
                    <label for="mobile">Mobile Number</label>
                </div>
                <div class="d-flex">
                    <div class="form-floating m-3 w-50 ">
                        <input type="date" class="form-control bg-transparent" name="dob" id="dob" required
                            placeholder="name@example.com">
                        <label for="dob">Date of Birth</label>
                    </div>
                    <div class="form-floating m-3 w-50">
                        <select class="form-select bg-transparent" id="branch" name="branch" required
                            aria-label="Floating label select example">
                            <option selected disabled>Select Branch</option>
                            @foreach ($branch as $br)
                                <option value="{{ $br->id }}">{{ $br->branch_id_prefix . ' ' . $br->branch_code }}
                                </option>
                            @endforeach
                        </select>
                        <label for="branch">Select Branch</label>
                    </div>
                </div>
                <div class="form-floating m-3 ">
                    <textarea class="form-control bg-transparent" required placeholder="Leave a comment here" name="address" id="address"
                        style="height: 100px"></textarea>
                    <label for="address">Address</label>
                </div>
                <div class="form-floating m-3 d-flex justify-contents-center">
                    <input type="submit" name="addManager" value="Add Manager" class="btn btn-primary w-25 m-auto">
                </div>

            </form>

        </div>
    </main>
    {{-- <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <input type="submit" name="" value="Login" /><br />
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="">
                    <div class="" id="" role="">
                        <h3 class="register-heading">Add Manager Form</h3>
                        <div class="row register-form">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" required name="branchName">
                                            <option class="hidden" selected disabled>Branch Name *</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Hooghly">Hooghly</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" required
                                            name="firstName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Middle Name "
                                            name="middleName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" required
                                            name="lastName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Father's Name *" required
                                            name="fatherName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mother's Name *" required
                                            name="motherName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Id *" required
                                            name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" class="form-control"
                                            placeholder="Contact No *" required name="contact" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" value="Male" required name="gender">
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" value="Female" required name="gender">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" required name="maritalStatus" value="Married">
                                                <span> Married </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" required name="maritalStatus" value="Unmarried">
                                                <span>Unmarried </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" required name="qualification">
                                            <option class="hidden" selected disabled>Higher Qualification
                                            </option>
                                            <option value="Graduation">Graduation</option>
                                            <option value="Post Graduation">Post Graduation</option>
                                            <option value="Matriculation">Matriculation</option>
                                            <option value="Higher Secondary">Higher Secondary</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="DOB *" required name="dob" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address *" required
                                            name="address" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State *" required
                                            name="state" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="06" maxlength="06" class="form-control"
                                            placeholder="Pin Code *" required name="pincode" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" required name="category">
                                            <option class="hidden" selected disabled>Category</option>
                                            <option value="General">General</option>
                                            <option value="ST">ST</option>
                                            <option value="SC">SC</option>
                                            <option value="OBC">OBC</option>
                                            <option value="Other">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" required name="disability">
                                            <option class="hidden" selected disabled>Disability</option>
                                            <option value="Yes">YES</option>
                                            <option value="No">NO</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="12" maxlength="12" class="form-control"
                                            placeholder="Aadhar Number *" required name="aadharNo" />
                                    </div>
                                    <div class="File"> <label>
                                            <h6>Upload Photo</h6>
                                        </label>
                                        <input type="file" accept="image/jpeg,image/jpg,image/png,image/webp" required
                                            name="photo" />
                                    </div>
                                    <div class="File"> <label>
                                            <h6>Upload Signature</h6>
                                        </label>
                                        <input type="file" accept="image/jpeg,image/jpg,image/png,image/webp" required
                                            name="signature" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Id *" required
                                            name="userid" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Password *"
                                            required name="password" />
                                        <input type="checkbox" name="" onclick="viewPasswordToggle()"
                                            style="cursor: pointer;"> Show Password
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                    <input type="reset" class="btnRegister btn btn-danger" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
