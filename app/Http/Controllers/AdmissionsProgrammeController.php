<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionsProgrammeController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['admissions_programme'] = \App\AdmissionsProgramme::firstOrFail();
            $data['admissions_programme']->initRepeater();
            $data['seo'] = $this->getSeo($data['admissions_programme']);
            return view('frontend.admissions_programme', $data);
        });
    }
}
