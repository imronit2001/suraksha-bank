@extends('admin.home')
@section('title','Helpline')
@section('page-name')


<div class="table-responsive ml-2 pl-2">
    <table class="container table">
    <thead>
        <tr class="coloum">
        <th scope="col">Issue</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{$Helpline->issue}}</td>
        </tr>
    </tbody>
    </table>
</div>
@endsection
