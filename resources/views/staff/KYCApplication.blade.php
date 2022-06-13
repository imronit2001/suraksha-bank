<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KYC Application</title>
</head>
<body>
    <div>
        <ul>
            @foreach($data as $i)
            <li>{{$i->formType}}</li>
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
            <li>{{$i->Address}}</li>
            <li>{{$i->City}}</li>
            <li>{{$i->Pin}}</li>
            <li>{{$i->State}}</li>
            <li>{{$i->Country}}</li>
            <li>{{$i->Mobile}}</li>
            <li>{{$i->Telephone}}</li>
            <li>{{$i->AddressProofNumber}}</li>
            <li>{{$i->Date}}</li>
            <li>{{$i->ApplicantPhoto}}</li>
            <li>{{$i->ApplicantSignature}}</li>
            <li>{{$i->ApplicantAadhar}}</li>
            <li>{{$i->ApplicantPan}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>