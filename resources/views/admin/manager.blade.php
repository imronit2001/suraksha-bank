@extends('admin.home')
@section('title','Managers')
@section('page-name')
<div class="staff-body">
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1>
        <h1 class="title text-center">Managers</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Enter Staff Name or Id">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <div class="staff-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" class="smallwidth">Manager Name</th>
                    <th scope="col" class="smallwidth">User Id</th>
                    <th scope="col" class="smallwidth">Branch</th>
                    <th scope="col" class="smallwidth">Phone</th>
                    <th scope="col" class="bigwidth">Email</th>
                    <th scope="col" >Profile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($manager as $st)
                <tr>
                    <th class="table-img"><img src={{asset($st->photo)}} alt="photo"></th>
                    <td><p>{{$st->designation." ".$st->firstName." ".$st->middleName." ".$st->lastName}}</p></td>
                    <td><p>{{$st->userid}}</p></td>
                    <td><p>{{$st->branchName}}</p></td>
                    <td><p>{{$st->contact}}</p></td>
                    <td><p>{{$st->email}}</p></td>
                    <td><p><a href={{ url('/admin/manager-details', $st->id) }} target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr>
                @endforeach
                {{-- <tr>
                    <th class="table-img"><img src={{asset('images/ronit.JPG')}} alt=""></th>
                    <td><p>Ronit Singh</p></td>
                    <td><p>15201219026</p></td>
                    <td><p>Cashier</p></td>
                    <td><p>7003622801</p></td>
                    <td><p>ronitsingh7003@gmail.com</p></td>
                    <td><p><a href="{{route('admin-staff-details')}}" target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr>
                <tr>
                    <th class="table-img"><img src={{asset('images/ronit.JPG')}} alt=""></th>
                    <td><p>Ronit Singh</p></td>
                    <td><p>15201219026</p></td>
                    <td><p>Cashier</p></td>
                    <td><p>7003622801</p></td>
                    <td><p>ronitsingh7003@gmail.com</p></td>
                    <td><p><a href="{{route('admin-staff-details')}}" target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr>
                <tr>
                    <th class="table-img"><img src={{asset('images/ronit.JPG')}} alt=""></th>
                    <td><p>Ronit Singh</p></td>
                    <td><p>15201219026</p></td>
                    <td><p>Cashier</p></td>
                    <td><p>7003622801</p></td>
                    <td><p>ronitsingh7003@gmail.com</p></td>
                    <td><p><a href="{{route('admin-staff-details')}}" target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr>
                <tr>
                    <th class="table-img"><img src={{asset('images/ronit.JPG')}} alt=""></th>
                    <td><p>Ronit Singh</p></td>
                    <td><p>15201219026</p></td>
                    <td><p>Cashier</p></td>
                    <td><p>7003622801</p></td>
                    <td><p>ronitsingh7003@gmail.com</p></td>
                    <td><p><a href="{{route('admin-staff-details')}}" target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr>
                <tr>
                    <th class="table-img"><img src={{asset('images/ronit.JPG')}} alt=""></th>
                    <td><p>Ronit Singh</p></td>
                    <td><p>15201219026</p></td>
                    <td><p>Cashier</p></td>
                    <td><p>7003622801</p></td>
                    <td><p>ronitsingh7003@gmail.com</p></td>
                    <td><p><a href="{{route('admin-staff-details')}}" target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr>
                <tr>
                    <th class="table-img"><img src={{asset('images/ronit.JPG')}} alt=""></th>
                    <td><p>Ronit Singh</p></td>
                    <td><p>15201219026</p></td>
                    <td><p>Cashier</p></td>
                    <td><p>7003622801</p></td>
                    <td><p>ronitsingh7003@gmail.com</p></td>
                    <td><p><a href="{{route('admin-staff-details')}}" target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr>
                <tr>
                    <th class="table-img"><img src={{asset('images/ronit.JPG')}} alt=""></th>
                    <td><p>Ronit Singh</p></td>
                    <td><p>15201219026</p></td>
                    <td><p>Cashier</p></td>
                    <td><p>7003622801</p></td>
                    <td><p>ronitsingh7003@gmail.com</p></td>
                    <td><p><a href="{{route('admin-staff-details')}}" target="_blank"><button class="btn btn-primary">Profile</button></a></p></td>
                </tr> --}}

            </tbody>
        </table>
    </div>
</div>
@endsection