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
        @foreach ($Helpline as $cus)
        <tr>
            <td>{{$cus->issue}}</td>
        </tr>
        @endforeach
    </tbody>

    {{-- <table>
        <tr>
            <th>Issue</th>
            <td>{{$cus->issue}}</td>
        </tr>
</table> --}}
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 71c4be71d900922a9e04286a33b5f21f8d3de507
