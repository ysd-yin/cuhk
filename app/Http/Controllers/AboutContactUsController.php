<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContactUsController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['about_contact_us'] = \App\AboutContact::withDescription()->first();
            $data['seo'] = $this->getSeo($data['about_contact_us']);
            return view('frontend.about_contact_us', $data);
        });
    }

}
