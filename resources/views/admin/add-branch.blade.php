{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>add branch</title>
</head>
<body> --}}
@extends('admin.home')
@section('title', 'Add Branch')
@section('page-name')
    {{-- <div class="container  Branch "> --}}
        <div class="container-b mt-5  Branch d-flex flex-wrap justify-content-center align-item-center ">

            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                {{-- <div class="row "> --}}
                    <div class="form-group ">
                        <label for="formGroupExampleInput2">Branch Name:</label>
                        <input type="text" name="branch_name" class="form-control" id="branch_name" placeholder="Branch Name">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">City:</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="City">
                    </div>
                    <div class="form-group text-truncate">
                        <label for="formGroupExampleInput2">State*:</label>
                        <input type="text" name="state" class="form-control" id="state" placeholder="State">
                    </div>
                {{-- </div> --}}
                <div class="form-group justify-content-center mt-3">
                    <button type="submit" class="btn btn-block">Save</button>
                </div>
            </form>
        </div>
    {{-- </div> --}}
    @endsection
