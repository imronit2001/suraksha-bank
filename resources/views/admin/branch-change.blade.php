@extends('admin.home')
@section('title','Branch Change')
@section('page-name')
<div class="staff-body">
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <!-- <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1> -->
        <h1 class="title text-center">Branch Change Applications</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Enter Customer Id">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <div class="staff-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="smallwidth">Customer Id</th>
                    <th scope="col" class="smallwidth">Customer Name</th>
                    <th scope="col" class="smallwidth">Account No</th>
                    <th scope="col" class="smallwidth">Current Branch</th>
                    <th scope="col" class="bigwidth">Changed Branch</th>
                    <th scope="col" class="bigwidth">Application</th>
                    <th scope="col" >Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><p>15201219026</p></td>
                    <td><p>Ronit Singh</p></td>
                    <td><p>12345678901234</p></td>
                    <td><p>Kolkata</p></td>
                    <td><p>Hooghly</p></td>
                    <td><p><a href=""><button class="btn btn-primary">View</button></a></p></td>
                    <td><p>Pending</p></td>
                </tr>
                <tr>
                    <td><p>15201219026</p></td>
                    <td><p>Ronit Singh</p></td>
                    <td><p>12345678901234</p></td>
                    <td><p>Kolkata</p></td>
                    <td><p>Hooghly</p></td>
                    <td><p><a href=""><button class="btn btn-primary">View</button></a></p></td>
                    <td><p>Pending</p></td>
                </tr>
                <tr>
                    <td><p>15201219026</p></td>
                    <td><p>Ronit Singh</p></td>
                    <td><p>12345678901234</p></td>
                    <td><p>Kolkata</p></td>
                    <td><p>Hooghly</p></td>
                    <td><p><a href=""><button class="btn btn-primary">View</button></a></p></td>
                    <td><p>Pending</p></td>
                </tr>
                <tr>
                    <td><p>15201219026</p></td>
                    <td><p>Ronit Singh</p></td>
                    <td><p>12345678901234</p></td>
                    <td><p>Kolkata</p></td>
                    <td><p>Hooghly</p></td>
                    <td><p><a href=""><button class="btn btn-primary">View</button></a></p></td>
                    <td><p>Pending</p></td>
                </tr>
                <tr>
                    <td><p>15201219026</p></td>
                    <td><p>Ronit Singh</p></td>
                    <td><p>12345678901234</p></td>
                    <td><p>Kolkata</p></td>
                    <td><p>Hooghly</p></td>
                    <td><p><a href=""><button class="btn btn-primary">View</button></a></p></td>
                    <td><p>Pending</p></td>
                </tr>
                <tr>
                    <td><p>15201219026</p></td>
                    <td><p>Ronit Singh</p></td>
                    <td><p>12345678901234</p></td>
                    <td><p>Kolkata</p></td>
                    <td><p>Hooghly</p></td>
                    <td><p><a href=""><button class="btn btn-primary">View</button></a></p></td>
                    <td><p>Pending</p></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection