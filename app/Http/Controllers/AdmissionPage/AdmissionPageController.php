<?php

namespace App\Http\Controllers\AdmissionPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionPageController extends Controller
{
    public function admission_information(){
        return view('admission.admission-information');
    }
    public function admission_test_result(){
        return view('admission.admission-test-result');
    }
    public function apply_online(){
        return view('admission.apply-online');
    }
}
