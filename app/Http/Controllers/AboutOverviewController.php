<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutOverviewController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['about_overview'] = \App\AboutOverview::withDescription()->first();
            $data['seo'] = $this->getSeo($data['about_overview']);
            return view('frontend.about_overview', $data);
        });
    }
}
