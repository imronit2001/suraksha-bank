<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\AccountOpenings;

class AccountOpeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Faker::create();
        foreach (range(1, 2) as $value) {
            $customer = new AccountOpenings();
            // $customer->customerId = random_int(1111111111, 9999999999);
            // $customer->account_no = random_int(11111111111111, 99999999999999);
            // $customer->login_pass = "12345";
            // $customer->transaction_pass = "12345";
            $customer->BranchName = "Kolkata";
            $customer->prefix = $user->titleMale();
            $customer->FullName = $user->firstName('male'|'female')." ".$user->lastName();
            $customer->DOB = $user->date($format = 'Y-m-d', $max = 'now');
            $customer->gender = $user->randomElement(['Male', 'Female']);
            $customer->MaritalStatus = $user->randomElement(['Married', 'Unmarried']);
            $customer->FatherName = $user->name('male');
            $customer->MotherName = $user->name('female');
            $customer->GaurdianName = $user->name('male'|'female');
            $customer->Nationality = $user->country();
            $customer->ResidentialStatus = "Individual Resident";
            $customer->OccupationType = "Student";
            $customer->religion = "Hindu";
            $customer->category = $user->randomElement(['General','OBC','ST','SC','Others']);
            $customer->CustomerType = "General";
            $customer->Disability = $user->randomElement(['Yes','No']);
            $customer->Qualification = $user->randomElement(['Graduate', 'SSC', 'HSC']);
            $customer->PanNumber = Str::random(10);
            $customer->Mobile = random_int(7000000000,9999999999);
            $customer->Email = $user->freeEmail();
            $customer->Telephone = $user->e164PhoneNumber();
            $customer->AddressProof = "Aadhar Card";
            $customer->AddressProofNumber = random_int(111111111111, 999999999999);;
            $customer->issuedBy = "UIDAI";
            $customer->AddressType = "Residential";
            $customer->Address = $user->address();
            $customer->City = $user->city();
            $customer->District = $user->streetName();
            $customer->State = $user->state();
            $customer->Pin = $user->postcode();
            $customer->Country = $user->country();
            $customer->Place = $user->streetSuffix();
            $customer->signDate = $user->date($format = 'Y-m-d', $max = 'now');
            $customer->ApplicantPhoto = $user->imageUrl('cats');
            $customer->ApplicantSignature = $user->imageUrl('cats');
            $customer->ApplicantAadhar = $user->imageUrl('cats');
            $customer->save();
        }
    }
}
