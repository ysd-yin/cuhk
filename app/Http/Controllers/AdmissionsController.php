<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionsController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['admissions'] = \App\Admissions::firstOrFail();
            $data['admissions']->initRepeater();
            $data['seo'] = $this->getSeo($data['admissions']);
            return view('frontend.admissions', $data);
        });
    }
}
