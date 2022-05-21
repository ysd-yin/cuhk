<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutManagementController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['about_management'] = \App\AboutManagement::withDescription()->firstOrFail();
            $data['about_management']->initRepeater();
            $data['seo'] = $this->getSeo($data['about_management']);
            return view('frontend.about_management', $data);
        });
    }
}
