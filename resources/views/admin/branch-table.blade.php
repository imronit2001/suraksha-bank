{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Branch table</title>
</head> --}}
@extends('admin.home')
@section('title','Branch')
@section('page-name')
<div class="add-branch btn-primary col-3   float-right m-3 p-2">
   <a href="{{route('admin-add-branch')}}"> <div class="button btn-block text-white " >Add Branch</div>
   </div></a>
    <div class="table-responsive ml-2 pl-2">
        <table class="container table">
        <thead>
            <tr class="coloum">
                <th scope="col">Branch Code</th>
                <th scope="col">Branch Name</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($branch as $bra)
            <tr>
                <td>{{$bra->branch_code}}</td>
                <td>{{$bra->branch_name}}</td>
                <td>{{$bra->city}}</td>
                <td>{{$bra->state}}</td>
                <td>
                    <a href="{{ url('admin/remove-branch',$bra->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection
{{-- </body>
</html> --}}
