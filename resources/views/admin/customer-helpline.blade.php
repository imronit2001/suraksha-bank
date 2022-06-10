@extends('admin.home')
@section('title','Helpline')
@section('page-name')

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
                    <a href="{{ url('admin/helpline-view', $cus->id)}}">
                    <button type="submit" class="btn btn-primary">Action</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
