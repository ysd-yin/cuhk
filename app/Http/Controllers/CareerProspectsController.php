<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerProspectsController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['career_prospects'] = \App\CareerProspetcs::firstOrFail();
            $data['seo'] = $this->getSeo($data['career_prospects']);
            return view('frontend.career_prospects', $data);
        });
    }
}
