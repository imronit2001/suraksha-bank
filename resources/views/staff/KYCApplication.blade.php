@extends('staff.home')
@section('title', 'KYC Application List')
@section('page-name')
<div style="width:75%; float:right;margin-left:10%;">
    <h2 style="text-align:center; margin: 50px auto;">KYC Application Form</h2>

    <table class="table table-hover">

        <thead>
            <tr>
                <th scope="col" class="smallwidth">Form Type</th>
                <th scope="col" class="smallwidth">Prefix</th>
                <th scope="col" class="smallwidth">Customer Name</th>
                <th scope="col" class="smallwidth">Phone</th>
                <th scope="col">More Details</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr>
                <td>
                    <p>{{$i->formType}}</p>
                </td>
                <td>
                    <p>{{$i->prefix}}</p>
                </td>
                <td>
                    <p>{{$i->FullName}}</p>
                </td>
                <td>
                    <p>{{$i->Mobile}}</p>
                </td>
                <td>
                    <a href="{{url('/staff/KYCRequests', $i->id)}}">Click Here</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection