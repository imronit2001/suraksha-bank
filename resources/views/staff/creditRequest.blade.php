<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Application</title>
</head>
<body>
    <div>
        <ul>
            @foreach($data as $i)
            <li>{{$i->prefix}}</li>
            <li>{{$i->FullName}}</li>
            <li>{{$i->FatherName}}</li>
            <li>{{$i->gender}}</li>
            <li>{{$i->DOB}}</li>
            <li>{{$i->MaritalStatus}}</li>
            <li>{{$i->Nationality}}</li>
            <li>{{$i->ResidentialStatus}}</li>
            <li>{{$i->PanNumber}}</li>
            <li>{{$i->AadharNumber}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>