<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $fname = $request->input('fname');
        $registration = $request->input('registration');
        $dateofbirth = $request->input('dateofbirth');
        $email = $request->input('email');
        $amountrequired = $request->input('amountrequired');
        $amountfamilyraise = $request->input('amountfamilyraise');
        $mobileno = $request->input('mobileno');
        $address = $request->input('address');
        $postalcode = $request->input('postalcode');
        $town = $request->input('town');
        // $institutionnamep = $request->input('institutionnamep');
        // $stage1 = $request->input('stage1');
        // $grade = $request->input('grade');
        // $institutionnamec = $request->input('institutionnamec');
        // $stage2 = $request->input('stage2');
        // $yearofcompletion = $request->input('yearofcompletion');
        // $course = $request->input('course');
        // $accountno = $request->input('accountno');
        // $branch = $request->input('branch');
        // $gender = $request->input('gender');
        // $county = $request->input('county');
        // $subcounty = $request->input('subcounty');
        // $constituency = $request->input('constituency');
        // $ward = $request->input('ward');
        // $location = $request->input('location');
        // $sublocation = $request->input('sublocation');
        // $village = $request->input('village');
        // $challenge = $request->input('challenge');
        // $fathername = $request->input('fathername');
        // $occupationf = $request->input('occupationf');
        // $idnof = $request->input('idnof');
        // $mobilenof = $request->input('mobilenof');
        // $annualgrossincomef = $request->input('annualgrossincomef');
        // $mothername = $request->input('mothername');
        // $occupationm = $request->input('occupationm');
        // $idnom = $request->input('idnom');
        // $mobilenom = $request->input('mobilenom');
        // $annualgrossincomem = $request->input('annualgrossincomem');
        // $marital = $request->input('marital');
        // $parentalive = $request->input('parentalive');

        $result = DB::table('applications')->insert([
            'FullName' => $fname,
            'AdminNo' => $registration,
            'DateofBirth' => $dateofbirth,
            'Email' => $email,
            'AmountRequired' => $amountrequired,
            'FamilyRaise' => $amountfamilyraise,
            'MobileNo' => $mobileno,
            'Address' => $address,
            'PostalCode' => $postalcode,
            'Town' => $town,]
        ); 
        return view('dashboard.application');   
    }
}
