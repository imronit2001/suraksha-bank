@extends('staff.home')
@section('title', 'Account Opening Application List')
@section('page-name')
    <div style="width:75%; float:right;margin-left:10%;">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="smallwidth">Prefix</th>
                <th scope="col" class="smallwidth">Customer Name</th>
                <th scope="col" class="smallwidth">Email</th>
                <th scope="col" class="smallwidth">Phone</th>
                <th scope="col">More Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr>
                <td>
                    <p>{{$i->prefix}}</p>
                </td>
                <td>
                    <p>{{$i->FullName}}</p>
                </td>
                <td>
                    <p>{{ $i->Email }}</p>
                </td>
                <td>
                    <p>{{ $i->Mobile }}</p>
                </td>
                <td>
                    <a href="{{url('/staff/AccountOpeningList')}}">Click Here</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
       