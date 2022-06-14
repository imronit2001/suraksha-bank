@extends('staff.home')
@section('title', 'Credit Card Application List')
@section('page-name')

<div style="width:75%; float:right;margin-left:10%;">
    <table class="table table-hover">

        <thead>
            <tr>
                <th scope="col" class="smallwidth">Prefix</th>
                <th scope="col" class="smallwidth">Customer Name</th>
                <th scope="col" class="smallwidth">Father Name</th>
                <th scope="col" class="smallwidth">Gender</th>
                <th scope="col">More Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr>
            <td><p>{{$i->prefix}}</p></td>
            <td><p>{{$i->FullName}}</p></td>
            <td><p>{{$i->FatherName}}</p></td>
            <td><p>{{$i->gender}}</p></td>

                
                <td>
                    <a href="{{url('/staff/CreditRequests')}}">Click Here</a>
                </td>                           
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
