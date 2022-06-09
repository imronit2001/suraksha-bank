<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CustomerDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $value){
            DB::table('customer_data')->insert([
             'branchName'=> "Kolkata"  ,
             'customerName'=> $faker->name()  ,
             'customerId'=> $faker->creditCardNumber()  ,
             'accountNo'=> $faker->creditCardNumber()  ,
             'dob'=> $faker->date($format = 'Y-m-d', $max = 'now')  ,
             'gender'=> "Male"  ,
             'maritalStatus'=> "Unmarried"  ,
             'guardianName'=> $faker->name()  ,
             'guardianRelation'=> "Father",
             'nationality'=> "Indian"  ,
             'occupation'=> $faker->jobTitle()  ,
             'organisationName'=> $faker->company()  ,
             'designation'=> $faker->jobTitle()  ,
             'annualIncome'=> "100000"  ,
             'religion'=> "Hindu"  ,
             'disability'=> "No"  ,
             'educationalQualification'=> "Graduation"  ,
             'aadharNo'=> $faker->creditCardNumber()  ,
             'panNo'=> $faker->e164PhoneNumber()  ,
             'mobile'=> $faker->phoneNumber()  ,
             'email'=> $faker->safeEmail()  ,
             'address'=> $faker->streetAddress()  ,
             'city'=> $faker->city()  ,
             'district'=> $faker->streetName()  ,
             'state'=> $faker->streetSuffix()  ,
             'pin'=> $faker->postcode()  ,
             'country'=> $faker->country()  ,
            //  'photo'=> $faker->  ,
            //  'signature'=> $faker->  ,
            //  'aadharCard'=> $faker->  ,
            //  'panCard'=> $faker->  ,
             'accountCreated'=> $faker->date($format = 'Y-m-d', $max = 'now')  ,
             'userId'=> $faker->userName()  ,
             'loginPassword'=> $faker->password($minLength = 6, $maxLength = 20)  ,
             'balance'=> "1000"  ,
             'accountStatus'=> "Active"  ,
            //  'otp'=>  $faker->  ,
            ]);
        }
    }
}
