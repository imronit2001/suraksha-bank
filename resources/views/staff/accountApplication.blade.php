<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Application</title>
</head>
<body>
    <div>
        <ul>
            @foreach($data as $i)
            <li>{{$i->prefix}}</li>
            <li>{{$i->FullName}}</li>
            <li>{{$i->DOB}}</li>
            <li>{{$i->gender}}</li>
            <li>{{$i->MaritalStatus}}</li>
            <li>{{$i->FatherName}}</li>
            <li>{{$i->MotherName}}</li>
            <li>{{$i->GaurdianName}}</li>
            <li>{{$i->RelationWithGuardian}}</li>
            <li>{{$i->Nationality}}</li>
            <li>{{$i->ResidentialStatus}}</li>
            <li>{{$i->OccupationType}}</li>
            <li>{{$i->religion}}</li>
            <li>{{$i->category}}</li>
            <li>{{$i->CustomerType}}</li>
            <li>{{$i->Disability}}</li>
            <li>{{$i->Qualification}}</li>
            <li>{{$i->PanNumber}}</li>
            <li>{{$i->Mobile}}</li>
            <li>{{$i->Email}}</li>
            <li>{{$i->Telephone}}</li>
            <li>{{$i->AddressProof}}</li>
            <li>{{$i->AddressProofNumber}}</li>
            <li>{{$i->issuedBy}}</li>
            <li>{{$i->AddressType}}</li>
            <li>{{$i->Address}}</li>
            <li>{{$i->City}}</li>
            <li>{{$i->District}}</li>
            <li>{{$i->State}}</li>
            <li>{{$i->Pin}}</li>
            <li>{{$i->Country}}</li>
            <li>{{$i->Place}}</li>
            <li>{{$i->signDate}}</li>
            <li>{{$i->ApplicantPhoto}}</li>
            <li>{{$i->ApplicantSignature}}</li>
            <li>{{$i->ApplicantAadhar}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>