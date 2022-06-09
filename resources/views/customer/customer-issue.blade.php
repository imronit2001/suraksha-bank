{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/table.css') }}" />
</head>
<body>--}}
    @extends('admin.home')
    @section('title','Helpline')
    @section('page-name')

    {{-- <div class="container">

        <form action="" class="col-6 form d-flex">
            <div class="form-group m-2">
                <input type="search" name="search" id="" class="form-control" placeholder="search">
            </div>
            <button class="btn btn-primary m-2">Search</button>

        </form>
    </div> --}}
    <div class="searchbox">
        <form>
            <input type="text" name="search" class="form-control" placeholder="Search">
            <button class="btn btn-primary">Search</button>
        </form>
    </div>
    <div class="table-responsive ml-2 pl-2">
        <table class="container table">
        <thead>
            <tr class="coloum">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Issues</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Helpline as $cus)
            <tr>
                <td>{{$cus->id}}</td>
                <td>{{$cus->name}}</td>
                <td>{{$cus->email}}</td>
                <td>{{$cus->mobile}}</td>
                <td>
                    <a href="{{ url('Customer/issues', $cus->id)}}">
                    <button type="submit" class="btn btn-primary">Action</button>
                    </a>
                    {{-- <a href="{{$cus->issue}}"> --}}
                </td>
                {{-- <td>{{$cus->issue}}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{--</body>
</html>--}}
@endsection
