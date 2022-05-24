<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionsFaqController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['admissions_faq'] = \App\AdmissionsFaq::firstOrFail();
            $data['admissions_faq']->initRepeater();
            $data['seo'] = $this->getSeo($data['admissions_faq']);
            return view('frontend.admissions_faq', $data);
        });
    }
}
