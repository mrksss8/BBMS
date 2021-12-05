<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificatePermitMenuController extends Controller
{
    public function brgy_clearance(){
        $residence_list = Resident::all();
        return view('brgy_certificate.brgy_clearance.index',compact ('residence_list'));
    }
}
