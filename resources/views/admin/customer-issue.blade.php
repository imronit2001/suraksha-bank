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
<form action="{{route('admin-helplineReply')}}" method="POST">
    @csrf
    <div class="justify-content-center align-item-center">
        <div class="my-5 py-5 text-dark">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-lg-810 col-xl-6">
                    <div class="form-group text-truncate">
                        <input type="hidden" name="id" value="{{$Helpline->id}}">
                        <input type="hidden" name="name" value="{{$Helpline->name}}">
                        <input type="hidden" name="email" value="{{$Helpline->email}}">
                        <input type="hidden" name="mobile" value="{{$Helpline->mobile}}">
                        <input type="hidden" name="date" value="{{$Helpline->created_at}}">
                        <textarea class="form-control" hidden="hidden" name="issue"  rows="6">{{$Helpline->issue}}</textarea>

                        <textarea class="form-control" required placeholder="Leave a reply here" name="reply" id="reply" rows="6"></textarea>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="submit" class="btn btn-success">
                        REPLY
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection
